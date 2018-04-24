<?php
include "dbconfig.php";
include "histogramDetailsWithNews.php";
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');


// Setup the graph
$graph = new Graph(1000,550);
$graph->SetScale("textlin");
$graph->SetMargin(30,10,40,20);
$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Filled Y-grid');
$graph->SetBox(false);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels($label);

$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($appleCount);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Apple');

// Create the secong line
$p2 = new LinePlot($googleCount);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Google');



//Create the fourth line
$p3 = new LinePlot($sonyCount);
$graph->Add($p3);
$p3->SetColor("#008000");
$p3->SetLegend('Sony');

$graph->legend->SetFrameWeight(2);

// Output line
$graph->Stroke();
  ?>