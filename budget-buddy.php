<?php /* Template Name: page Budget Buddy */ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>" />
    <title>Budget Buddy</title>
    <?php wp_head();?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type ="text/css" href="<?php bloginfo('template_url');?>/styles/budgetbuddy-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/font-awesome/css/font-awesome.min.css">
</head>
<head>
    
    
    
   

  </head>
<body>

    <!-- Hamburger menu and navagation menu -->
    <section id="menu_container" class="menu_container">
        <p class="desktop_header">BB</p>
        <ul class="menu">
            
            <a class="burger"><i class="fas fa-bars"></i></a>
        </ul>
    </section>

    <ul class="mobile_menu hidden hide">
        <li id="home" class="menu_items">Home</li>
        <li id="log_purchases" class="menu_items">Log Purchases</li>
        <li id="edit_budget" class="menu_items">Edit Budget</li>
    </ul>
    <!-- Log in form -->
    <section id="log_in_section" class="log_in_section">
        <p class="mobile_header">Budget Buddy</p>
        <form class="login_form">
            <input class="loging_input" type="text" placeholder="Name">
            <input class="login_input" type="text" placeholder="Email">
            <button class="login_input login_button" type="button">Log In</button> 
            <button class="login_input second_login_button" type="button">Log In</button>  
        </form> 
    </section>

<!-- Desktop navagation and mobile hamburger menu -->
    <section class= "containerdesktop desktop-hidden">
    <section class="enterweeklybudget hidden">
        <p class="weekly_budget_title">Hey </p>
        <p class="weekly_budget_title_sub">Enter your weekly budget</p>
        <input type="text" id="food" name="Food" placeholder="$ Food Total">
        <input type="text" id="entertainment" name="Entertainment" placeholder="$ Entertainment Total">
        <input type="text" id="clothing" name="Clothing" placeholder="$ Clothing Total">
        <input type="text" id ="bills" name="Bills" placeholder="$ Bills Total">
        <button type="button" class="second_save">Save</button>
        <button type="button" class="save">Save</button>
    </section>

    <!-- Landing page - weekly totals in each category -->
	<section class="weekly__total--container hidden">
		<div class="weekly__total">
			<p class="weekly__total--title title">Weekly Total</p>
			<div class="total">
				<p class="total_money" id="weekly_tot"></p>
				<p class="remaining" id="total_remaining">Remaining:</p>
			</div>
			<p class="food__total--title title">Food</p>
			<div class="total">
				<p class="total_money" id="food_total"></p>
				<p class="remaining" id="food_remaining">Remaining:</p>
			</div>
			<p class="entertainment__total--title title">Entertainment</p>
			<div class="total">
				<p class="total_money" id="ent_total"></p>
				<p class="remaining" id="ent_remaining">Remaining:</p>
			</div>
			<p class="clothing__total--title title">Clothing</p>
			<div class="total">
				<p class="total_money" id="clothing_total"></p>
				<p class="remaining" id="clothing_remaining">Remaining:</p>
			</div>
			<p class="bills__total--title title">Bills</p>
			<div class="total">
				<p class="total_money" id="bills_total"></p>
				<p class="remaining" id="bills_remaining">Remaining:</p>
			</div>
		</div>
	</section>
  
    <!-- Log new purchases form -->

    <section class="purchases hidden" id="purchases">
        <div class="greeting" id="greeting">
            <p class="pur_title" id="pinsert">Hey, </p>
            <p class="pur_title_sub">Log your purchases.</p>
            <section class="pur-log" id="pur-log">
                <form action="" class="purchases_form">
                    <input type="text" id="food-price-log" name="Food" placeholder="$ Food">
                    <!-- <label for="Food">Food</label> -->
                    <input type="text" id="ent-price-log" name="Entertainment" placeholder="$ Entertainment">
                    <!-- <label for="Entertainment">Entertainment</label> -->
                    <input type="text" id="clothing-price-log" name="Clothing" placeholder="$ Clothing">
                    <!-- <label for="Clothing">Clothing</label> -->
                    <input type="text" id ="bills-price-log" name="Bills" placeholder="$ Bills">
                    <!-- <label for="Bills">Bills</label> -->
                    <button type="button" class="second_save">Save</button>
                    <button type="button" class="save">Save</button> 
                </form>
            </section>


        </div>
    </section>
</section>




    <?php wp_footer();?>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/budgetbuddy-js.js"></script>
</body>
</html>