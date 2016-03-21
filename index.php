<?php
include_once("icl/aviy_code.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Plannr | Planning for all.</title>
<?php include_once("icl/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>
</head>
<body>
    <header class="Mn1">
        <div class="Mn1Ctr">
            <figure class="Mn1a">
                Plannr
            </figure>

            <!-- search module -->
            <div class="mn1_search">
			    <form action="search.php" method="get">
		       		<div class="dbsWpr">
					    <input id="dbS" name="s" type="text" autocomplete="off" onKeyUp="dbSm(this.value)" placeholder="Search"/>
					    <input type="submit"/>
					    <i class="Mn1Icna"></i>
				    </div>
			    </form>
		        <div id="dbSr"></div>
		    </div>

            <figure class="fR Mn1hR">
                <div class="Mn1bTNCtr">
                    <button class="btn1">Post</button>
                    <button class="btn1">Create a Plan</button>
                </div>
                <details class="UsrCtr Mn1c">
                    <img class="iDp1" src="img/temp/tempUsr.jpg">
                </details>
            </figure>
        </div>
    </header>

    <!-- design plane -->
    <header class="Mn2">
        <article class="Mn2Ctr">
            <figure class="fL">
                <section class="Fx1">
                    <var>File</var>
                <section>
                <section class="Fx1">
                    <var>Edit</var>
                <section>
                <section class="Fx1">
                    <var>Insert</var>
                <section>
                <section class="Fx1">
                    <var>Help</var>
                <section>
                <section class="Fx2">
                    <var><b>B</b></var>
                    <var>I</var>
                    <var><u>U</u></var>
                    <var><s>S</s></var>
                <section>
                <section class="Fx1">
                    <var><span id="lClr" class="fL"></span>a</var>
                <section>
                <section class="IcnCnt">
                    <i id="Mn2dg1" alt="Align Left"></i>
                    <i id="Mn2dg2" alt="Centered"></i>
                    <i id="Mn2dg3" alt="Align Right"></i>
                </section>
                <section class="IcnCnt">
                    <i id="Mn2dg4"></i>
                    <i id="Mn2dg5"></i>
                </section>
                <section class="Fx1">
                    <select>
                        <option value="1">1</option>
                        <option value="Liberation Serif" selected>Liberation Serif</option>
                    </select>
                <section>
                <section class="Fx1">
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10.5">10.5</option>
                        <option value="11">11</option>
                        <option value="12" selected>12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                <section>
                <section class="Fx1">
                    <var>Table</var>
                <section>
            </figure>
            <figure class="fR Mn2hR">
                <button class="btn1">Update</button>
            </figure>
        </article>
    </header>

    <!-- side bar -->
    <aside class="Mn1">
        <div class="Mn1Cnr">
            <header>
                <small class="dB">Now viewing</small>
                <span>V-Day Trip</span>
            </header>
            <dfn id="Crtpd" class="Crtpd">Your trip is in 29 days</dfn>
            <section class="Mn1Sec1a">
                <small>Connected with</small>
                    <div>
                        <a href="#"><img class="iDp2" src="img/temp/tempUsr2.jpg"></a>
                        <a href="#"><bdo>Seraya Martinez</bdo></a>
                    </div>
            </section>
            <span class="StPlnAs dI">Sort By</span>
            <select>
                <option value="date_lh" selected>Date: Low to high</option>
                <option value="date_hl">Date: High to low</option>
                <option value="last_updated">Last updated</option>
                <option value="views_hl">Views: High to low</option>
                <option value="views_lh">Views: Low to high</option>
            </select>
            <menu class="Mn1Lst">
                <li id="PlnLi1">
                    <div class="asdIcnWpr">
                        <i class="asdIcn1a"></i>
                    </div>
                    <bdi>Daily Reminder</bdi>
                    <time>12<sub>hr</sub></time>
                </li>
                <li id="PlnLi2">
                    <div class="asdIcnWpr">
                        <i class="asdIcn1a"></i>
                    </div>
                    <bdi>Doctors Apointment</bdi>
                    <time>12<sub>hr</sub></time>
                </li>
                <li id="PlnLi2">
                    <div class="asdIcnWpr">
                        <i class="asdIcn1b"></i>
                        <i class="asdIcn2"></i>
                    </div>
                    <bdi>V-Day Trip</bdi>
                    <time>29<sub>days</sub></time>
                </li>
                <li id="PlnLi3">
                    <div class="asdIcnWpr">
                        <i class="asdIcn1a"></i>
                    </div>
                    <bdi>Project Dedut</bdi>
                    <time>12<sub>hr</sub></time>
                </li>
                <li id="PlnLi4"i>
                    <div class="asdIcnWpr">
                        <i class="asdIcn1a"></i>
                    </div>
                    <bdi>Project deadline's</bdi>
                    <time>12<sub>hr</sub></time>
                </li>
                <li id="PlnLi5">
                    <div class="asdIcnWpr">
                        <i class="asdIcn1a"></i>
                    </div>
                    <bdi>Certification Deadline</bdi>
                    <time>12<sub>hr</sub></time>
                </li>
                <li id="PlnLi6">
                    <div class="asdIcnWpr">
                        <i class="asdIcn1a"></i>
                    </div>
                    <bdi>CA relocation</bdi>
                    <time>12<sub>hr</sub></time>
                </li>
                <li id="PlnLi7">
                    <div class="asdIcnWpr">
                        <i class="asdIcn1a"></i>
                    </div>
                    <bdi>New car purchase</bdi>
                    <time>12<sub>hr</sub></time>
                </li>
            </menu>
        </div>
    </aside>

    <!-- panel display -->
    <main class="sCnr1">
        <!-- before trip -->
        <section>
            <h3><strong>Budget:</strong>$1,000</h3>
            <table>
                <tr>
                    <th class="Hd" colspan="50">Budget Matching</th>
                </tr>
                <tr>
                    <th class="Amt">Estimated Cost</th>
                    <th class="Amt">Amount so far</th>
                    <th class="Amt">Total Cost</th>
                </tr>
                <tr>
                    <td class="Amt">$1,000</td>
                    <td class="Amt">$708.68</td>
                    <td class="Amt" rowspan="50">???</td>
                </tr>
            </table>
            <h4>Before: Prepping for travel</h4>
            <p>Remember to bring</p>
            <ul class="RmbrToBrng">
                <li>Canvas Bag</li>
                <li>Deodorant</li>
                <li>Headphones</li>
                <li class="sUb">Canvas Wallet
                    <ul>
                        <li>LLicense (May need to get another one)</li>
                        <li>Debit Card</li>
                        <li>Gift card</li>
                        <li>$30 Cash</li>
                    </ul>
                </li>
                <li>Inhaler</li>
                <li>Glasses</li>
                <li>Alergy Medicine</li>
                <li>Multi Vitiamins</li>
                <li>Folder:
                    <ul>
                        <li>Insurance card</li>
                        <li>Medical results</li>
                    </ul>
                </li>
                <li>Snacks from airport</li>
                <li>Amazon
                    <ul>
                        <li>Jacket</li>
                        <li>Hat</li>
                        <li>Scarf</li>
                    </ul>
                </li>
            </ul>
            <table>
                <tr>
                    <th class="Hd" colspan="4">Things purchased</th>
                </tr>
                <tr>
                    <th>Item(s)</th>
                    <th class="Amt">Cost</th>
                    <th class="Amt">Total</th>
                </tr>
                <tr>
                    <td>Airline tickets</td>
                    <td class="Amt">$305.20</td>
                    <td class="Amt" rowspan="50">$403.68</td>
                </tr>
                <tr>
                    <td>Canvas Wallet</td>
                    <td class="Amt">$10.41</td>
                </tr>
                <tr>
                    <td>Bluetooth Headset</td>
                    <td class="Amt">$26.09</td>
                </tr>
                <tr>
                    <td>Canvas Backpack</td>
                    <td class="Amt">$38.99</td>
                </tr>
                <tr>
                    <td>Luggage Bag</td>
                    <td class="Amt">$22.99</td>
                </tr>
            </table>
            <h4>
                Clothes Budget: $200</br>
                Target items: $30
            </h4>
            <table border="1px solid #DBDADA">
                <tr>
                    <th class="Hd"  colspan="50">Things to buy</th>
                </tr>
                <tr>
                    <th class="Cnt">Amount</th>
                    <th>Item(s)</th>
                    <th class="Amt">Estimated cost</th>
                    <th class="Amt">Exact Cost</th>
                    <th class="Amt">Guest Total</th>
                    <th class="Amt">Actual Total</th>
                </tr>
                <tr>
                    <td class="Cnt">1</td>
                    <td>Tooth brush, paste, mouth wash Kit</td>
                    <td class="Amt">$5</td>
                    <td class="Amt">N/A</td>
                    <td class="Amt ttl" rowspan="50">$305</td>
                    <td class="Amt ttl" rowspan="50">???</td>
                </tr>
                <tr bgcolor="#f6f6f6">
                    <td class="Cnt">1</td>
                    <td>facial: cleanser, toner, wash, lotion</td>
                    <td class="Amt">$20</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td class="Cnt">1</td>
                    <td>Body: oil, lotion</td>
                    <td class="Amt">$3</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td class="Cnt">1</td>
                    <td>Nail kit</td>
                    <td class="Amt">$2</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td class="Cnt">1</td>
                    <td>Hair cap</td>
                    <td class="Amt">$2</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td class="Cnt">1</td>
                    <td>Foot powder</td>
                    <td class="Amt">$5</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td class="Cnt">4</td>
                    <td>Designer Underwear</td>
                    <td class="Amt">$30</td>
                    <td class="Amt">N/A</td>
                </tr>
                 <th class="Nt"  colspan="4">Single package.</th>
                <tr>
                    <td class="Cnt">4</td>
                    <td>Undershirts</td>
                    <td class="Amt">$13</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td class="Cnt">4</td>
                    <td>Socks</td>
                    <td class="Amt">$15</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                <th class="Nt"  colspan="4">Purchase in pairs of 2.</th>
                <tr bgcolor="#f6f6f6">
                    <td class="Cnt">1</td>
                    <td>Belt</td>
                    <td class="Amt">$5</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td class="Cnt">2</td>
                    <td>Shoes</td>
                    <td class="Amt">$40-$100</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td class="Cnt">4</td>
                    <td>Designer Shirts</td>
                    <td class="Amt">$90</td>
                    <td>N/A</td>
                </tr>
                <th class="Nt"  colspan="4">
                    <ul>
                        <li>1 comfortable shirt $20</li>
                        <li>2 Polo $50</li>
                        <li>1 Button up $20</li>
                    </ul>
                </th>
                <tr>
                    <td class="Cnt">4</td>
                    <td>Designer Pants</td>
                    <td class="Amt">$90</td>
                    <td>N/A</td>
                </tr>
                <th class="Nt"  colspan="4">
                    <ul>
                        <li>1 pair of sweat pants $20</li>
                        <li>2 Pairs of jeans $50</li>
                        <li>1 pair of slacks $20</li>
                    </ul>
                </th>
                <tr bgcolor="#f6f6f6">
                    <td class="Cnt">1</td>
                    <td>Tablet</td>
                    <td class="Amt">$50-$100</td>
                    <td>N/A</td>
                </tr>

            </table>
            <h4>After: Time on trip</h4>
            <table>
                <tr>
                    <th class="Hd" colspan="50">Things to be purchased</th>
                </tr>
                <tr>
                    <th>Item(s)</th>
                    <th class="Amt">Estimated cost</th>
                    <th class="Amt">Exact Cost</th>
                    <th class="Amt">Guest Total</th>
                    <th class="Amt">Actual Total</th>
                </tr>
                <tr>
                    <td>Hotel</td>
                    <td class="Amt">$200.00</td>
                    <td class="Amt">$225.58</td>
                    <td class="Amt ttl" rowspan="50">$305</td>
                    <td class="Amt ttl" rowspan="50">???</td>
                </tr>
                <tr>
                    <td>Target Items</td>
                    <td class="Amt">$30</td>
                    <td class="Amt">N/A</td>
                </tr>
                <th>
                    <ul>
                        <li>Condoms $15</li>
                        <li>Lube $15</li>
                    </ul>
                </th>
                <tr>
                    <td>Grocery store</td>
                    <td class="Amt">$30</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td>Resturant</td>
                    <td class="Amt">$80</td>
                    <td class="Amt">N/A</td>
                </tr>
                <tr>
                    <td>Meals</td>
                    <td class="Amt">$50</td>
                    <td class="Amt">N/A</td>
                </tr>
            </table>
        </section>
    </main>
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>
</body>
</html>

