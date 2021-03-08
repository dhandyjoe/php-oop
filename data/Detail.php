<?php 

class Detail {

    private string $name;
    private int $level;
    private string $skill;

    public function __construct(string $name, int $level, string $skill)
    {
        $this->name = $name;
        $this->level = $level;
        $this->skill = $skill;
    }

    function getHero () {
        echo "Name : $this->name" . PHP_EOL;
        echo "Level : $this->level" . PHP_EOL;
        echo "Skill : $this->skill" . PHP_EOL;
    }

}

?>