<?php

namespace Cheddzy\LaravelPalette;

use MoonlyDays\BinaryStream\BinaryReader;
use MoonlyDays\BinaryStream\BinaryWriter;

class ColorPalette {

    /**
     * magic string | 4 bytes
     * count of palettes | 4 bytes - 32bit int
     * for every palette
     *      length of title | 4 bytes
     *      read X bytes as characters | X bytes
     *      count of colors | 4 bytes
     *      for every color
     *          read red | 1 byte
     *          read green | 1 byte
     *          read blue | 1 byte
     */
    private const MAGIC_STRING = '%PAL';
    public function encode(array $palettes, string $path): void {

        $write = new BinaryWriter($path);

        $write->writeString(self::MAGIC_STRING);
        $write->writeInt32(count($palettes));

        foreach ($palettes as $palette) {

            $write->writeString($palette['title']);
            $write->writeInt32(count($palette['colors']));

            foreach ($palette['colors'] as $color) {
                $write->writeByte($color['red']);
                $write->writeByte($color['green']);
                $write->writeByte($color['blue']);
            }
        }
    }

    public function decode(string $content): array {

        $paletteData = [];

        $read = new BinaryReader($content);

        $magic = $read->readString();
        if($magic != self::MAGIC_STRING) {
            throw new \Exception('Unexpected magic string');
        }

        $paletteCount = $read->readInt32();

        for ($i = 0; $i < $paletteCount; $i++) {

            $paletteTitle = $read->readString();

            $palette = [
                'title' => $paletteTitle,
            ];

            $paletteColorAmount = $read->readInt32();

            for ($j = 0; $j < $paletteColorAmount; $j++) {
                $palette['colors'][] = [
                    'red' => $read->readByte(),
                    'green' => $read->readByte(),
                    'blue' => $read->readByte()
                ];
            }

            $paletteData[] = $palette;
        }

        return $paletteData;
    }
}
