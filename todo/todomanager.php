<?php
    namespace todo;

    class TodoManager
    {
        private $items = [];
        private $count = 0;

        public function AddItem($todoString) {
            $item = new TodoItem;
            $item->id = $this->count + 1;
            $item->message = $todoString;
            array_push($this->items, $item);
        }

        public function RemoveItem($removeid) {
            for ($i = 0; $i < count($this->items); $i++)
            {
                if ($this->items[$i]->id == $removeid) {
                    unset($this->items[$i]);
                }
                break;
            }
        }

        public function RenderItems() {
            foreach ($this->items as &$item) {
                echo $item->message;
            }
        }
    }

    class TodoItem 
    {
        public $id;
        public $message;
    }

    class Todos
    {
        public static $Manager;

        public static function Init() {
            if (empty(self::$Manager)) {
                self::$Manager = new TodoManager;
            }
        }
    }
?>