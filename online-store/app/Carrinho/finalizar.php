<?php
    include_once "../../public/data.php";

    //verifica se não há uma sessão iniciada, se não houver, inicia uma nova sessão
    if(!isset($_SESSION))
        session_start();

    //se existir o carrinho na sessão    
    if(isset($_SESSION['carrinho'])){
        //percorrer todos os itens do carrinho
        $qt_itens_qt_ok = 0;

    foreach($_SESSION['carrinho'] as $item){
    //para cada item, localizar no array $todos_produtos e atualizar a quantidade
            
    //conta a número de produtos cadastrados
        $qt_produtos = count($all_products);

        //perquisar o id no array $todos_produtos
        $i = 0;

        while($i < $qt_produtos && $all_products[$i]['product_id'] != $item['product_id'])
            $i++;

            if($i < $qt_produtos){            
                //verificar se a quantidade no carrinho é menor ou igual ao estoque
                if($item['product_quantity'] <= $all_products[$i]['product_quantity']){
                    //atualizar a quantidade o array $todos_produtos
                    $all_products[$i]['product_quantity'] -= $item['product_quantity'];
                    $qt_itens_qt_ok++;
               }
           } 
            //fim  if($i < $qt_produtos)
        }//fim foreach
        
        if($qt_itens_qt_ok == count($_SESSION['carrinho'])){

            $_SESSION['all_products'] = $all_products;

            unset($_SESSION['carrinho']);
    
            $_SESSION['compra_efetuada'] = true;
    }
}
    //redireciona para página produtos
    header("Location:../product/all-products.php");
?>