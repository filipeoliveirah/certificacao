
<!DOCTYPE html>
<html>
<head>
    <title>Emissão de Certificado - Mini curso: Produtividade de Vendas</title>
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    session_start();
    if(isset($_SESSION['aprovado']) && $_SESSION['aprovado'] == 'nao'){
        $html = '
        

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

        <h1 style="margin-collapse: none; margin-top: 105mm; text-align: center">'.$_SESSION['nomeCliente'].'</h1>
        <h2 style="margin-collapse: none; margin-top: 17mm; text-align: center">'.date("d/m/Y").'</h2>';
        

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
    }
    else{
        echo "
        <div style='margin-top: 200px'>    
            <div class='logo-dna'><img src='https://www.dnadevendas.com.br/wp-content/themes/dnadevendas/images/logo-dnadevendas-white.svg'></div>
            <div class='alerta'>        
                <h2 style='text-align: center;'>Você precisa ser aprovado para emitir um certificado</h2>
            </div>
        </div>    
        ";
    }
    ?>
</body>

</html> 
