<?php
    session_start();

    $html = '
    <h1>Logo DNA</h1>
    <h2>Mini Curso de Vendas</h2>
    <h3>Certificamos que o aluno</h3>
    <p style="font-kerning: on"> Certificamos que o aluno <h5>'.$_SESSION['nomeCliente'].'</h5> concluiu o mini treinamento de vendas com carga horária de 2h. </p>';

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