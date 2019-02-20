<?php
namespace YojNC\Fields;


trait ColorCounterTrait
{
    private function setDataDefaults()
    {
        $this->withMeta([
            'max' => null,
            'min' => null,
            'errorUntil' => 80,
            'counter' => null,
        ]);
    }

    /**
     * @param int $min
     * @return $this
     */
    public function minChars(int $min)
    {
        $this->withMeta([
            'min' => $min,
        ]);

        return $this;
    }

    /**
     * @param int $min
     * @return $this
     */
    public function errorUntil(int $percenrage)
    {
        if ($percenrage > 0) {
            $this->withMeta([
                'errorUntil' => $percenrage,
            ]);
        }

        return $this;
    }

    /**
     * @param bool $showCounter
     * @return $this
     */
    public function withCounter(bool $showCounter = true)
    {
        $this->withMeta([
            'counter' => $showCounter,
        ]);

        return $this;
    }
}