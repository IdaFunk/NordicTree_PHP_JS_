<?php

class ShoppingCartModel {

    private $cart;

    public function __construct() {
        $this->cart=array();
    }


    //Funktion för att lägga till i kundvagnen
    public function addToCart($produkt){

        //Om id in t finns i kundvagnen lägg till ett produkt-objekt i kundvagnen och adderar antalet med 1
        if(!array_key_exists($produkt->id, $this->cart)){
            $produkt->qty++;
            $this->cart[$produkt->id]=$produkt;
        }

        //adderar antalet med 1
        else{
            $p=$this->cart[$produkt->id];
            $p->qty++;
            $this->cart[$p->id]=$p;
        }
    }

    //Funktion för att ta bort produkt från kundvagnen
    public function removeFromCart($product){

        //subtrahera med 1, om produkt finns i kundvagnen
        if(array_key_exists($product->id, $this->cart)){
            $produkt=$this->cart[$product->id];
            $produkt->qty--;

            //Ta bot produkt om det bara finns 1
            if($produkt->qty<=0){
                unset($this->cart[$produkt->id]);//remove the object

            }

            else{
                $this->cart[$produkt->id]=$produkt;
            }
        }
    }

    //Funktion för att hämta ut totala summan för produkterna i kundvagnen
    public function getTotalToPay(){
        $totalToPay=0;

        foreach($this->cart as $product){
            $totalToPay+=$product->price*$product->qty;
        }

        return $totalToPay;
    }

    //Funktion för att visa upp alla produkter i kundvagnen
    public function getProductsInCart(){

        $arrayObject = new ArrayObject($this->cart);

        return $arrayObject->getArrayCopy();
    }

}// end class
