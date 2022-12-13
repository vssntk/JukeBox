<?php
class HomeController extends Controller
{
    public function Main()
    {
        // Vi du
        //  // GỌI Model
        //  $product_model = $this->model("ProductModel");

        //  // GỌI View
        //  $this->view("Home", [
        //      "Product" => $product_model->getProduct(),
        //      "Category" => $product_model->getCategory(),
        //  ]);


        // GỌI Model
        

        // GỌI View
        $this->view("Home");
    }

}
?>