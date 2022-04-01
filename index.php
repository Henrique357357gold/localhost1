<?php
require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Henrique da Silva Machado");
$pessoa->setEndereco("R Quinta da Torre ");
$pessoa->setBairro("Vila Aurea");
$pessoa->setCep("08411-190");
$pessoa->setCidade("São Paulo");
$pessoa->setEstado("SP");
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
                <?php echo $pessoa->getNome();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getEndereco();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getBairro();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getCep();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getCidade();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getEstado();?>
            </td>
        </tr>
    </table>
</body>
</html>