<?php
abstract class Component{

    public static $temp;

    public function render(): void {
        ob_start();

        if(static::$temp instanceof Closure){
            $temp = static::$temp->bindTo($this, static::class);
            $temp();
        }
        
        echo ob_get_clean();
    }

}
