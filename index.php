<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Two Javascript Modules</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


<script type="text/javascript">
( function() {

    window.mainModule = new function(){};

    // private 
    var self = window.mainModule;
    self.MODULE = 'mainModule';
    self.helloWorld = null;

    self.construct = function() {
    };
    self.sayHello = function() {
        if( !self.helloWorld ){
            self.helloWorld = new mainModule.helloWorldModule();
        }
        self.helloWorld.sayHello();
    };
    self.construct();
    // public
    return {
        sayHello : function() {
            self.sayHello();
        }
    };
})();

( function( mainModule ){
    mainModule.helloWorldModule = function( ) {

        // private
        var self = this;
        self.MODULE = 'helloWorldModule';
        // functions
        self.construct = function() {
        };
        self.sayHello = function() {
            alert( 'hello' );
        };

        self.construct();

        // public
        return {
            sayHello : function(){
                self.sayHello();
            }
        };
    };
})( mainModule );

window.onload = function() {
    mainModule.sayHello(); 
}
</script>    
    
    </head>
    <body>
    </body>
</html>
