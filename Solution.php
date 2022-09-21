<?php


class Solution
{
    public $map = [
        [1,1,1,0],
        [1,1,0,0],
        [0,0,0,1],
        [1,0,1,0],
    ];

    public $countIsland = 0;

    public function islandFinder(){

        $lengthColum = count($this->map);

        if($lengthColum<= 0){
            return $this->countIsland;
        }

        for ($i = 0; $i<$lengthColum; $i++){
            $lengthLine = count($this->map[$i]);

            for ($j = 0; $j<$lengthLine; $j++){
                if ($this->map[$i][$j] == 1){
                    $this->countIsland++;

                    $this->discoverIsland($this->map, $i, $j, $lengthLine, $lengthColum);
                }
            }
        }
        return $this->countIsland;
    }

    private function discoverIsland($map, $i, $j, $lengthLine, $lengthColum ){
        if ($i<0 || $j<0 || $j>=$lengthLine || $i>=$lengthColum || $this->map[$i][$j] == 0){
            return;
        }
        $this->map[$i][$j] = 0;

        $this->discoverIsland($this->map, $i+1, $j, $lengthColum, $lengthLine);
        $this->discoverIsland($this->map, $i, $j+1, $lengthColum, $lengthLine);
        $this->discoverIsland($this->map, $i-1, $j, $lengthColum, $lengthLine);
        $this->discoverIsland($this->map, $i, $j-1, $lengthColum, $lengthLine);
    }

    public function test(){
        $lengthColum = count($this->map);

        if($lengthColum<= 0){
            return $this->countIsland;
        }

        for ($i = 0; $i<$lengthColum; $i++) {

            $lengthLine = count($this->map[$i]);
            for ($j = 0; $j<$lengthLine; $j++){
                $this->map[$i][$j] = 0;
            }
        }
        return $this->map;
    }
}

