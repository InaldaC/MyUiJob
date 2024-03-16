<?php

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Bem vindo ao Mozbila \n";
    $response .= "1. Comprar bilhete \n";
    $response .= "2. Verificar rotas";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Escolha a tua transportadora \n";
    $response .= "1. Entre Rios  \n";
    $response .= "2. Kurula Investimntos  \n";
    $response .= "3. Nagi Investimentos   \n";

}    else if ($text == "1") {
        // Business logic for first level response
        $response = "CON Escolha o teu ponto de partida \n";
        $response .= "1. Sul  \n";
        $response .= "2. Centro  \n";
        $response .= "3. Norte   \n";

}   else if ($text == "1") {
        // Business logic for first level response
        $response = "CON Escolha o teu ponto de partida \n";
        $response .= "1. Maputo  \n";
        $response .= "2. Xai-Xai  \n";
        $response .= "3. Inhambane   \n";

}   else if ($text == "1") {
        // Business logic for first level response
        $response = "CON Escolha o teu ponto de destino \n";
        $response .= "1. Sul  \n";
        $response .= "2. Centro  \n";
        $response .= "3. Norte   \n";


}        else if ($text == "2") {
            // Business logic for first level response
            $response = "CON Escolha o teu ponto de destino \n";
            $response .= "1. Beira  \n";
            $response .= "2. Chimoio  \n";
            $response .= "3. Tete  \n";
            $response .= "4. Mocuba";  

}            else if ($text == "2") {
                // Business logic for first level response
                $response = "CON Dias de viagem disponíveis \n";
                $response .= "1. Quinta(17/03)  \n";
                $response .= "2. Sexta(18/03)  \n";
                             
}            else if ($text == "2") {
                // Business logic for first level response
                $response = "CON Confirme os teus dados \n";
                $response .= "Nagi Investimentos \n";
                $response .= "Trajecto: Maputo-Chimoio  \n";
                $response .= "Data: Sexta(17/03)  \n";
                $response .= "1. Confirmo  \n";
                $response .= "0. Voltar  \n";


}                else if ($text == "1") {
                    // Business logic for first level response
                    $response = "CON Digite os teus dados \n";
                    $response .= "Digita o seu nome e apelido \n";

}                   else if ($text == " ") {
                        // Business logic for first level response
                        $response = "CON Digite os teus dados \n";
                        $response .= "Digite o teu contacto  \n";

}                   else if ($text == " ") {
                        // Business logic for first level response
                        $response = "CON Digite os teus dados \n";
                        $response .= "Digite contacto de um familiar \n";                        
                   
}                        else if ($text == " ") {
                            // Business logic for first level response
                            $response = "CON Digite os teus dados \n";
                            $response .= "Digite contacto de um familiar \n";   
                            
}                       else if ($text == " ") {
                            // Business logic for first level response
                            $response = "CON Confirme os teus dados \n";
                            $response .= "Nome User \n";
                            $response .= "8xxxxxxx  \n";
                            $response .= "8xxxxxxxx   \n";
                            $response .= "1. Confirmo  \n";
                            $response .= "0. Voltar  \n";

                                        
}                       else if ($text == "1") {
                            // Business logic for first level response
                         // This is a terminal request. Note how we start the response with END
                         $response = "CON Valor do bilhete: 2510 \n Método de pagamento";   
                         $response = "1. E-Mola \n"; 
                         $response = "2. M-Kesh \n";
                         $response = "3. M-Pesa \n"; 
                         
}                           else if ($text == "3") {
                            // Business logic for first level response
                            // This is a terminal request. Note how we start the response with END
                            $response = "END Código de serviço".$phoneNumber ."\nMais detalhes enviados por sms";




} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Your phone number i ".$phoneNumber;
}
// } else if($text == "1*1") { 
//     // This is a second level response where the user selected 1 in the first instance
//     $accountNumber  = "ACC1001";

//     // This is a terminal request. Note how we start the response with END
//     $response = "END Your account number is ".$accountNumber;

// }

// Echo the response back to the API
header('Content-type: text/plain');
echo $response; 