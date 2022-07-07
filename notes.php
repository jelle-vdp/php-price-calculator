<!-- CURRENCY FORMATTER -->
function amountFormat(int $number, $separator = ",", $currency = "🤑€") {
  $decimal = substr($number, -2);
  $amount = substr($number, 0, -2) . $separator . $decimal;
  return $currency . $amount;
}
<!-- call CURRENCY FORMATTER -->
echo amountFormat(25000); // return 🤑€250,00
<!--  -->


page 1 - select customer
page 2 - select products
page 3 - show total & discounts









page 1 -- only select user form drop down DONE /// after submit, change to page2


page 2 -- name & price, add to cart button? quantity button?


prices on page 2 will be formatted for display


USER model - 1st & last name concat --- into html dropdown