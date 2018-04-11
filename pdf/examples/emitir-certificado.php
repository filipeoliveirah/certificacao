<?php
    session_start();

    $html = '
    <pageheader name="myHeaderNoNum" content-left="My Book Title" content-center="myHeader1" content-right="" header-style="font-family:sans-serif; font-size:8pt; color:#880000;" header-style-right="font-size:12pt; font-weight:bold; font-style:italic; color:#088000;" line="on" />

<pageheader name="myHeaderNoNumEven" content-left="" content-center="myHeader1Even" content-right="{DATE j-m-Y}" header-style="font-family:sans-serif; font-size:8pt; color:#000088;" header-style-left="font-weight:bold; " line="on" />

<pageheader name="myHeader1" content-left="My Book Title" content-center="myHeader1" content-right="{PAGENO}" header-style="font-family:sans-serif; font-size:8pt; color:#880000;" header-style-right="font-size:12pt; font-weight:bold; font-style:italic; color:#088000;" line="on" />

<pageheader name="myHeader1Even" content-left="{PAGENO}" content-center="myHeader1Even" content-right="{DATE j-m-Y}" header-style="font-family:sans-serif; font-size:8pt; color:#000088;" header-style-left="font-weight:bold; " line="on" />


<htmlpageheader name="myHTMLHeader1" style="display:none">
<table width="100%" style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 9pt; color: #000088;"><tr>
<td width="33%">Left header p <span style="font-size:14pt;">{PAGENO}</span></td>
<td width="33%" align="center"><img src="sunset.jpg" width="126px" /></td>
<td width="33%" style="text-align: right;"><span style="font-weight: bold;">Right header</span></td>
</tr></table>
</htmlpageheader>

<htmlpageheader name="myHTMLHeader1Even" style="display:none">
<table width="100%" style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 9pt; color: #000088;"><tr>
<td width="33%"><span style="font-weight: bold;">Outer header</span></td>
<td width="33%" align="center"><img src="sunset.jpg" width="126px" /></td>
<td width="33%" style="text-align: right;">Inner header p <span style="font-size:14pt;">{PAGENO}</span></td>
</tr></table>
</htmlpageheader>

<pagefooter name="myFooter1" content-left="My Book Title" content-center="myFooter1" content-right="{PAGENO}" footer-style="font-family:sans-serif; font-size:8pt; font-weight:bold; color:#008800;" footer-style-left="" line="on" />

<pagefooter name="myFooter1Even" content-left="{PAGENO}" content-center="myFooter1Even" content-right="{DATE j-m-Y}" footer-style="font-family:sans-serif; font-size:10pt; color:#000880;" footer-style-left="font-weight:bold; " line="on" />


<setpageheader name="myHeaderNoNum" page="O" value="on" show-this-page="1" />
<setpageheader name="myHeaderNoNumEven" page="E" value="on" />

<h1 style="margin-collapse: none; margin-top: 105mm; text-align: center">'.$_SESSION['nomeCliente'].'</h1>';

    include("../mpdf.php");

    $mpdf = new mPDF(); 
    $mpdf->AddPage('L');

    $mpdf->SetDisplayMode('default', 'two');

    // LOAD a stylesheet
    $stylesheet = file_get_contents('certificado.css');
    $mpdf->WriteHTML($stylesheet, 1);	// The parameter 1 tells that this is css/style only and no body/html/text

    $mpdf->WriteHTML($html);
    $mpdf->SetTitle('Certificado Mini Curso de Vendas');
    $mpdf->Output('certificado-dna-de-vendas.pdf',"I");

    exit;
?>