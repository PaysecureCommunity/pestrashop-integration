<?php
/* Smarty version 3.1.48, created on 2025-05-17 21:30:08
  from 'C:\xampp\htdocs\prestashop-integration\admin\themes\default\template\helpers\dataviz\graph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6828e3c053d8f3_57647573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86df2ddf3b472c1fd6da1da0ea068b0cc760b554' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\admin\\themes\\default\\template\\helpers\\dataviz\\graph.tpl',
      1 => 1747431220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828e3c053d8f3_57647573 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="box-clients" class="col-lg-3 box-stats color1" >
	<div class="boxchart-overlay">
		<div class="boxchart"></div>
	</div>
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers'),$_smarty_tpl ) );?>
</span>
	<span class="value">4 589</span>
</div>

<div id="box-orders" class="col-lg-3 box-stats color2">
	<div class="boxchart-overlay">
		<div class="boxchart"></div>
	</div>
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders'),$_smarty_tpl ) );?>
</span>
	<span class="value">789</span>
</div>

<div id="box-income" class="col-lg-3 box-stats color3">
	<i class="icon-money"></i>
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Income'),$_smarty_tpl ) );?>
</span>
	<span class="value">$999,99</span>
</div>

<div id="box-messages" class="col-lg-3 box-stats color4">
	<i class="icon-envelope-alt"></i>
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message'),$_smarty_tpl ) );?>
</span>
	<span class="value">19</span>
</div>

<div class="clearfix"></div>

<div id="box-line" class="col-lg-3 box-stats color1" >
	<div class="boxchart-overlay">
		<div class="boxchart"></div>
	</div>
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Traffic'),$_smarty_tpl ) );?>
</span>
	<span class="value">4 589</span>
</div>

<div id="box-spline" class="col-lg-3 box-stats color2" >
	<div class="boxchart-overlay">
		<div class="boxchart"></div>
	</div>
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conversion'),$_smarty_tpl ) );?>
</span>
	<span class="value">4 589</span>
</div>

<div class="clearfix"></div>

<?php echo '<script'; ?>
>
	var data = [4, 8, 15, 16, 23, 42, 8, 15, 16, 23, 42, 16, 23, 42, 8, 15, 15, 16, 23];
	var chart = d3.select("#box-clients .boxchart").append("svg")
		.attr("class", "data_chart")
		.attr("width", data.length * 6)
		.attr("height", 30);
	var y = d3.scale.linear()
		.domain([0, d3.max(data)])
		.range([0, d3.max(data)]);
	chart.selectAll("rect")
		.data(data)
		.enter().append("rect")
		.attr("y", function(d) { return 30 - d; })
		.attr("x", function(d, i) { return i * 6; })
		.attr("width", 4)
		.attr("height", y);
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	var data = [4, 8, 15, 16, 23, 42, 8, 15, 16];
	var chart = d3.select("#box-orders .boxchart").append("svg")
		.attr("class", "data_chart")
		.attr("width", data.length * 6)
		.attr("height", 30);
	var y = d3.scale.linear()
		.domain([0, d3.max(data)])
		.range([0, d3.max(data)]);
	chart.selectAll("rect")
		.data(data)
		.enter().append("rect")
		.attr("y", function(d) { return 30 - d; })
		.attr("x", function(d, i) { return i * 6; })
		.attr("width", 4)
		.attr("height", y);
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	var myColors = ["#1f77b4", "#ff7f0e", "#2ca02c", "#d62728", "#9467bd", "#8c564b", "#e377c2", "#7f7f7f", "#bcbd22", "#17becf"];
	d3.scale.myColors = function() {
		  return d3.scale.ordinal().range(myColors);
	};

	var data = [53245, 28479, 19697, 24037, 30245];
	var width = 140,
		height = 140,
		radius = Math.min(width, height) / 2;
	var color = d3.scale.ordinal().range(myColors);
	var pie = d3.layout.pie()
		.sort(null);
	var arc = d3.svg.arc()
		.innerRadius(radius - 140)
		.outerRadius(radius - 120);
	var svg = d3.select("#box-pie .boxchart").append("svg")
		.attr("class", "data_chart")
		.attr("width", width)
		.attr("height", height)
		.append("g")
		.attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
	var path = svg.selectAll("path")
		.data(pie(data))
		.enter().append("path")
		.attr("fill", function(d, i) { return color(i); })
		.attr("d", arc);
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	var data = [3, 6, 2, 7, 5, 12, 1, 3, 8, 9, 2, 5, 7],
		w = 120,
		h = 50,
		margin = 5,
		y = d3.scale.linear().domain([0, d3.max(data)]).range([0 + margin, h - margin]),
		x = d3.scale.linear().domain([0, data.length]).range([0 + margin, w - margin]);
	var vis = d3.select("#box-line .boxchart").append("svg")
		.attr("class", "data_chart")
		.attr("width", w)
		.attr("height", h);
	var g = vis.append("g")
		.attr("transform", "translate(0, 50)");
	var line = d3.svg.line()
		.x(function(d,i) { return x(i); })
		.y(function(d) { return -1 * y(d); });
	g.append("path").attr("d", line(data));

	vis.selectAll("dot")
		.data(data)
		.enter().append("circle")
		.attr("stroke", "#1BA6E5")
		.attr("stroke-width", 1)
		.attr("r", 3)
		.attr("transform", "translate(0, 50)")
		.attr("fill", "white")
		.attr("cx", function(d, i) { return x(i); })
		.attr("cy", function(d, i) { return -1 * y(d); });

	var	area = d3.svg.area()
		.x(function(d, i) { return x(i); })
		.y0(h)
		.y1(function(d, i) { return -1 * y(d); });

	g.append("path")
		.datum(data)
		.attr("class", "area")
		.attr("d", area);
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	var data = [3, 6, 2, 7, 5, 12, 1, 3, 8, 9, 2, 5, 7],
		w = 120,
		h = 50,
		margin = 5,
		y = d3.scale.linear().domain([0, d3.max(data)]).range([0 + margin, h - margin]),
		x = d3.scale.linear().domain([0, data.length]).range([0 + margin, w - margin]);
	var vis = d3.select("#box-spline .boxchart").append("svg")
		.attr("class", "data_chart")
		.attr("width", w)
		.attr("height", h);
	var g = vis.append("g")
		.attr("transform", "translate(0, 50)");
	var line = d3.svg.line()
		.interpolate("basis")
		.x(function(d,i) { return x(i); })
		.y(function(d) { return -1 * y(d); });
	g.append("path").attr("d", line(data));
<?php echo '</script'; ?>
>
<?php }
}
