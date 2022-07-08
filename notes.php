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

<!-- Main issue with products error was that we included the the ProductsModel.php file in both the productsView.php file as in index.php, it had to be done only in the View -->











page 1 -- only select user form drop down DONE /// after submit, change to page2


page 2 -- name & price, add to cart button? quantity button?


prices on page 2 will be formatted for display


USER model - 1st & last name concat --- into html dropdown

page 1 -- only select user form drop down DONE /// after submit, change to page2


page 2 -- name & price, add to cart button? quantity button?


prices on page 2 will be formatted for display


USER model - 1st & last name concat --- into html dropdown


////////////////////// calculator logic: notes
(customer) 1 > (group_id) 2
(customer_group) 2 > (var_discount) 13% (partent_id) 1
(customer_group) 1 > (fixed_discount) 12
>>>>
(product) 1 > (price) 5418
>>>>
((price) MINUS (fixed_discount)) MINUS (var_discount)
5418 - 12 = 5406 - 13% = 4703.22

//////////////////////
(customer) 30 > (group_id) 35
(customer_group) 35 > (fixed_discount) 12 (partent_id) 31
(customer_group) 31 > (var_discount) 30
>>>>
(product) 1 > (price) 5418
>>>>
((price) MINUS (fixed_discount)) MINUS (var_discount)
5418 - 12 = 5406 - 30% = 3784.2

//////////////////////
(customer) 10 > (group_id) 12     ((var_dis 43))
(customer_group) 12 > (var_discount) 45 (partent_id) 9
(customer_group) 9 > (fix_discount) 19 (parent_id) 4
(customer_group) 4 > (var_dis) 58
>>>>
(product) 1 > (price) 5418
>>>>
((price) MINUS (fixed_discount)) MINUS (var_discount)
5418 - 19 = 5399 - 58% = 2267.58







fixed_discount = add all together then subtract

variable_discount = choose higest only (temp table, ORDER BY DESC, LIMIT 1)




(new table) temp_fixed_discount =
customer fixed_discount (if not null), customer_group fixed_discount (if not null)



//////////////// FIXED DISCOUNTS, combined
SELECT
fixed_discount
INTO
#temp_fixed_discount
FROM
customer, customer_group
WHERE
fixed_discount IS NOT NULL;

SELECT
SUM(fixed_discount)
FROM
#temp_fixed_discount;

SELECT
price -
(SELECT
SUM(fixed_discount)
FROM
#temp_fixed_discount;)
FROM
products;



//////////////// VARIABLE DISCOUNTS, highest only
SELECT
MAX(fixed_discount)
INTO
#temp_variable_discount
FROM
customer, customer_group;




SELECT
MAX(fixed_discount)
INTO
#temp_variable_discount
FROM
customer, customer_group;



//////////////// VAR & FIXED, this should do ALL fixed discounts first, then VAR % (percentage needs to be done, only minus that amount currently)
SELECT
(price -
(SELECT
SUM(fixed_discount)
FROM
#temp_fixed_discount;)) - (SELECT
MAX(fixed_discount)
INTO
#temp_variable_discount
FROM
customer, customer_group;)
FROM
products;