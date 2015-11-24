# jsrrd-Yii2 jsrrd
==========
wrapper to jsrrd

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist stivehu/yii2-jsrrd "*"
```

or add

```
"stivehu/yii2-jsrrd": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= stivehu\widgets\jsrrd::widget(); ?>```

You must create a draw() function.


Example:

<script>
function draw(){

      var ds_graph_opts={'Oscilator':{ color: "#ff8000", 
                                       lines: { show: true, fill: true, fillColor:"#ffff80"} }}

      var graph_opts1={legend: { noColumns:4}, yaxis:{max:250,min:-200}};
      var rrdflot_defaults1={graph_only:true,use_checked_DSs:true,checked_DSs:['SignChanger'],use_rra:true,rra:1}
      // the rrdFlotAsync object creates and handles the graph
      var f1=new rrdFlotAsync("mygraph1","example3.rrd",null,graph_opts1,ds_graph_opts,rrdflot_defaults1);

      var graph_opts2={legend: { noColumns:4}, yaxis:{min:100},tooltipOpts:{content:"MyValue: %y.3"}};
      var rrdflot_defaults2={graph_only:true,use_checked_DSs:true,checked_DSs:['Oscilator'],use_rra:true,rra:0}
      // the rrdFlotAsync object creates and handles the graph
      var f2=new rrdFlotAsync("mygraph2","example3.rrd",null,graph_opts2,ds_graph_opts,rrdflot_defaults2);
}
</script>

 <table width="100%">
    <tr><td width="50%">
    <div id="mygraph1"></div>
    </td>
    <td>
    <div id="mygraph2"></div>
    </td></tr>
    </table>
