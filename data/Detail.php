<?php 

class Detail {

    protected string $name;
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

    function setSkill (string $skill): string {
        return $this->skill = $skill;
    }
}

// Contoh penerapan Protected
class DetailDummy extends Detail {

    public function info() {
        echo "Name : $this->name" . PHP_EOL;
    }

}

?>