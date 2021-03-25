<?php 

class Player {
    private string $name;
    private int $level;

    public function detailHero() {
        echo "Hero : $this->name" . PHP_EOL;
        echo "Level : $this->level" . PHP_EOL;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLevel(): int {
        return $this->level;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setLevel(int $level) {
        $this->level = $level;
    }
}

?>