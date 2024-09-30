<?php
// Função para verificar se as credenciais estão corretas
function verificarLogin($usuario, $senha) {
    $usuarioCorreto = 'admin';
    $senhaCorreta = '12345';

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        return true;
    }
    return false;
}

// Solicita entrada do usuário via terminal
echo "Digite o usuário: ";
$usuario = trim(fgets(STDIN));

echo "Digite a senha: ";
$senha = trim(fgets(STDIN));

// Verifica login
if (verificarLogin($usuario, $senha)) {
    echo "Login bem-sucedido!\n";
} else {
    echo "Usuário ou senha incorretos!\n";
}
?>
