<?php
$hash = '$2y$10$gTGUz1xZpNjp9prZekXUBuysYpJjwz1T2ciMq/VuH.QKdw8W74y22';
$input = '76122823';

if (password_verify($input, $hash)) {
    echo "✅ La contraseña coincide";
} else {
    echo "❌ No coincide";
}
