<?php

class Stack {
    private $stack = array();

    public function push($data) {
        array_push($this->stack, $data);
        echo "Push: $data\n";
    }

    public function pop() {
        if (!$this->isEmpty()) {
            $data = array_pop($this->stack);
            echo "Pop: $data\n";
            return $data;
        } else {
            echo "Stack is empty!\n";
        }
    }

    public function peek() {
        if (!$this->isEmpty()) {
            echo "Peek: " . end($this->stack) . "\n";
            return end($this->stack);
        } else {
            echo "Stack is empty!\n";
        }
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}

function main() {
    $stack = new Stack();
    
    while (true) {
        echo "\nSelect mode (1-4):\n";
        echo "1: Push\n";
        echo "2: Pop\n";
        echo "3: Peek\n";
        echo "4: IsEmpty\n";
        echo "0: Exit\n";
        
        $choice = readline("Enter your choice: ");
        
        if ($choice === '0') {
            echo "Exiting...\n";
            break;
        }
        
        switch ($choice) {
            case '1':
                $data = readline("Enter data to push: ");
                $stack->push($data);
                break;
            case '2':
                $stack->pop();
                break;
            case '3':
                $stack->peek();
                break;
            case '4':
                echo $stack->isEmpty() ? "Stack is empty.\n" : "Stack is not empty.\n";
                break;
            default:
                echo "Invalid choice. Please enter a number between 0 and 4.\n";
        }
    }
}

main();

?>

// PHP版に変換しました！もし何か変更点や追加したい機能があれば教えてくださいね！ 🚀
