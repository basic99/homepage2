<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Jim White&lsquo;s Homepage</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/homepage2.css" rel="stylesheet">


    <style>
    </style>

  </head>
  <body>

<?php
include "../menu.php";
?>

  <div  class='marspic'>
  <img src='/img/mars_wp_hdr.png' />
</div>
<main class="container">
<div class="row g-5 bg-light rounded">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <!-- <h2>Home</h2> -->

    <p>UPGRADING THE PC
<p>OCTOBER 10, 2012
<p>I decided it was time to upgrade my PC. My main task was to replace the Windows XP on my dual boot Windows/Linux work computer with Windows 7. The hard drive that was running Windows had some errors in the diagnostics so I bought a new 500GB drive to install the new OS. I decided that a memory upgrade made sense while I was at it, so added a new stick that upped the memory from 1.5GB to 3GB. The OS I purchased from NCSU at a special price as a staff member. Went to the store to buy it, but was only available as download so I downloaded and burned to DVD a copy of Windows 7 professional 32-bit.

<p>After putting my new memory stick in the computer I wanted to check that it was good so I downloaded a free program called memtest. It took about 30 minutes to run and check and found no errors. While I had the computer open I decided to test whether the software RAID that I was running on Linux actually worked. The configuration is RAID 1 or mirrored, so that supposedly if one drive fails my computer still works. To check this I disconnected each disk of the array in turn and tried to boot. Between tests you need to re-sync the array and I didn’t figure this out right away since it doesn’t do it automatically as I thought, but you have to add the disk that you removed back into the software.

<p>Windows 7 install was fairly easy. The only problem was when I tried to partition my 500GB drive into a 300 GB C: drive and a 200GB D: drive it popped up with an automatically added 100MB partition that caused me to go back and read some, but did get the install into 2 partitions as I wanted. I was happy that the DVD contained many default drivers so I didn’t have to go searching for old CDs like when I installed XP. My CD drivers for the Nvidia Geforce 7300 didn’t run so I downloaded that from the Nvidia website.

<p>So far Windows 7 seems to be a nice upgrade. Generally faster booting and opening programs and a nicer look than XP.


<hr>

<p>THE NEW JOB
<p>AUGUST 21, 2012
<p>After being unemployed since last fall(my LinkedIn page says I was a freelance web developer) I have been working now for six weeks doing computer work for a company that works with ecology. It seems to be going well, but its hard to tell what your employers think of your progress at a new job. Hopefully I won’t get fired next week!

<p>The company is located in Asheville, so I am a remote worker using all the latest internet tools like vpn, remote desktop, instant messaging, and Skype. The owner of the company has written a large computer program mostly in the language C++ that is used to model populations of Red-cockaded Woodpecker, so my main responsibilities are maintaining and adding to the C++ code. I have also done some Python scripting and data manipulation with the PostgreSQL database. The program has been used to model woodpecker population on military bases and the current project is modeling the population at Fort Benning.

<p>Aside from computer knowledge, a lot of the modelling is common sense. However, one area that was suggested that I read up on is the area of population genetics. So I have started reading an introduction, and find it to be an interesting subject. The main law of population genetics(at least the part I have read) is the law of  Hardy-Weinberg equilibrium. The Hardy in the name is named for a famous mathematician – if mathematicians can be considered famous, which I found interesting. Another area that the book covers is evolution. You hear a lot about evolution as a political and religious issue, but its the first time I have read anything about evolution as a quantified science. Among other things evolution theory predicts the frequencies of genes that cause sickle-cell anemia, Huntington disease, and cystic fibrosis.



<hr>





<p>WRITING JAVASCRIPT
<p>JUNE 21, 2012
<p>On my resume I say I am a programmer and list the languages PHP, JavaScript, and Python. However, I have been doing more JavaScript recently than anything. Recently, I wrote a script that was failing in unusual ways, and while working on it I learned some new tools that others might find useful as a JavaScript programmer.

<p>The first tool, which I have been using longer than the others is js-beautify. JavaScript does not require any particular indentation, but is much easier to read and troubleshoot if it is formatted with proper indentation. This tool does that. I use Komodo Edit to write HTML and JavaScript, and the for-pay version allows you to integrate this into the IDE automatically. In order to use it with the free version IDE I wrote a Python script to format  a .js file. This requires switching from the IDE to a console window to run the script, but other than that it works well.

<p>The next tool, which I just recently discovered is JSHint. To use it just copy and paste your JavaScript into their web page and it will point out better ways to write more correct code.

<p>I started using Firebug after reading the OpenLayers, Beginner’s Guide. Firebug gives you a JavaScript console and the ability to click on a web page and get information about the underlying elements. Google Chrome has most of the same functionality built in, but also has a JavaScript debugger. This allows you to set break points in your JavaScript code and the page will stop at the break points and allow you to see the values of all the variables at that point.

<p>The last tool is not actually a tool, but a JavaScript programming technique. It is called closures. The scope of a variable defines that part of the code where the value of a  variable is available. Closures can take advantage of the scope of a variable inside of functions in order to dynamically create functions. For example if you have a function with 3 parameters and you want to create a new function from it with only one parameter and the other 2 set to specific values you can do this with closures. There are probably other tricks you can do, but I used this one to help troubleshoot one of my scripts.

<hr>





<p>NUMBERS AND PYTHON
<p>MARCH 9, 2012
<p>It has occurred to me two times now where I wanted to be able to make some mathematical calculations that required extra digits or precision that the programming language Python was able to do it. It is a common language and is automatically installed in Linux, which is my desktop of choice.

<p>Here are some examples that show the use of Python to calculate very large numbers, calculate the value of large numbers to a modulus, and divide two numbers with a high precision.
<pre>
[jim@intrexcore2 ~]$ python
Python 2.6.6 (r266:84292, Dec  7 2011, 20:38:36)
[GCC 4.4.6 20110731 (Red Hat 4.4.6-3)] on linux2
Type "help", "copyright", "credits" or "license" for more information.
>>> 9*2
18
>>> 112**56
5704390783543055148497052427105142545007094319455466186753181001768062370545397028706212973044775021043640818466816L
>>> 22**789
1484209368987055664835267513269020782056572913665389360710993235647353654600718051214561226506395746917004454295231135392233954113209970324078422930829669659889790905015109099651816468416993153345796393249082190880560779799148367444271413281501278491572945389083004439689952805484461387751484188365768374674576495326864496558951018029848269444776287140869585391950132327105186456206323012792043081538208599784776172953593340354592284195309329894679943469851515548384450045890081875258294527235570832847624567513125295640967560191880440775646987692835066327960934486610784531403318281705562313166764297138553633645886465005542649427406806999953498677068116542246603770298508504920168233638748979619525844005160145942935955584019757060864581833018122836439007581000295288803969945931431917589136944077264684283303334162875035591187475906443149001756520978726471815621610519317668085293630518278640986694188826533120948387000017232262211213251551614215463765292579592160977582712236672133383215635362453885390795701099214030569950513308956961106465196847233236992L
>>> 22**789%532
316L
>>> from decimal import *
>>> getcontext().prec = 100
>>> 50.0/58
0.86206896551724133
>>> Decimal(50) / Decimal(58)
Decimal('0.8620689655172413793103448275862068965517241379310344827586206896551724137931034482758620689655172414')
>>>

</pre>


<p>Here I calculated 112 to the 56th power, 22 to the 789th power, and 22 to the 789th power modulus 532. Next I used the decimal package to calculate the value of 50 divided by 58. The normal result shows about 20 decimal places. However, with the decimal package and setting the desired precision to 100 we can see that this fraction takes about 29 decimal places to start to repeat.

<p>Lastly, I should add that all of these results returned instantly.

<hr>
<p>REGINALD FITZURSE
<p>JULY 31, 2011
<p>I recently watched an episode of the Monarchy with David Starkey documentary series on Netflix that covered the reign of Henry II of England. It was of interest because it mentioned a cousin or possibly uncle of mine that I have discovered in my genealogy research.

<p>Reginald FitzUrse, in fact, committed a infamous murder. Here he is pictured as one of the four knights who murdered Thomas Beckett.

￼<p>After performing this horrible and unpopular crime he suffered years of persecution and ended up being sent by the Pope on crusade to the Holy Land, where he died and was buried by the Templar’s church.

<p>Records show that he held the manor of Barham in Kent. The Barham family of Virginia, of which I am a descendant through the marriage of Thomas Moore and Mary Barham about 1738, is descended from Robert Barham of East Hall in the parish of Boughton Monchelsea in Kent. Genealogists differ on the relationship of the ancestors of the Barhams to Reginald FitzUrse, but agree that they were from branches of the same family.
<hr>

WEBMASTER FOR HUGUENOT-MANAKIN.ORG, PT. II
JUNE 30, 2011
I went to the national meeting for the Huguenot Society in Richmond at the start of June, and was introduced as the new webmaster. When I got back from the meeting Ann and I got to work copying about 50 pages from the old frames based site into the new template I created. By last weekend we had finished, and I made the change in the site configuration so that visitors will now see the newly redesigned site.

After considering one of the various content management systems, I decided to create my own templates from html. This turned out to work fine, and I didn’t need to learn a new program that I might not need to use in the future. The template was written in html5, with some php, mostly to create separate files for the header, navigation section, etc. If you look at the site you might remark that it looks nice, but probably if you are a professional graphic designer it appears that the layout was not done by a professional.

There were several books I found helpful in designing the site – a book about html5 , one about typography, and a book by Jeffrey Zeldman. Zeldman it seems is very influential in modern web design. I heard of him by attending the local web design meetup group.

I used parts of a template file from the web site html5 reset. If you are planning writing an html5 site I would recommend you look at the template. Among other things it resets all the attributes of the elements to zero or default. This can be helpful, but then you have to go out and find the browser defaults for all the elements and add them back in. At least you know what you have. A  program you will run into with html5 is modernizr. I didn’t use this for my site and if you are just starting you can get by using html5 shiv. They both fix Internet Explorer for html 5, but modernizr also detects what features are available in your browser.


WEBMASTER FOR HUGUENOT-MANAKIN.ORG
MARCH 7, 2011
I received an e-mail several months back from one of the officers of the Huguenot society that I have joined. Ann, the person who wrote me the e-mail asked if I would like to be the society webmaster. I wrote back and told her that I would be happy to do it, and now I get to travel to the society meeting this summer and be introduced to the executive committee.

The society website has been written over the past 10 or so years using frames. I have decided that we need a new website design without the old frames based layout. This will involve in addition to redesign moving about 50 pages from the old site to the new site.

So now I am considering how to redesign the site. I have been involved in web site design professionally for 5 years, but mainly involved in backend coding and database work. Now I have to decide how I am going to approach this new project. Should I write out all the web pages myself as templates and cut and paste the old content into that? If so do I use the old HTML/XHTML 4 or do I learn the new HTML 5 and use that?

Aside from coding my own HTML, I can use a Content Management System (CMS). Evidently, there are 3 leading choices – Joomla, WordPress, and Drupal. I have some experience with WordPress, so if I go in this direction, that is probably what I shall choose.


MATH TRICKS
FEBRUARY 5, 2011
I have for the past couple of years enjoyed reading some about number theory or discrete math – I’m not sure exactly where the dividing line is between these 2 areas. Last night I watched Die Hard with a Vengeance, and there was a scene in it where Bruce and Samuel have to disarm a bomb in the water fountain by measuring 4 gallons of water and placing it on a scale using a 3 gallon and a 5 gallon jug. Somehow they eventually figured this out by pouring water back and forth between the jugs and disarmed the bomb. Very dramatic and a good way for movie stars to solve the problem.

I thought about this and wondered if a mathematician could do it differently. The solution to the problem  turns out to be to solve the equation 3*x is congruent to 4 (mod 5). Although such equations can be solved systematically for more complex cases, simple inspection shows the answer to be 3*3 is congruent to 4 (mod 5). Hence, Bruce and Samuel needed to fill the 3 gallon jug 3 times and pour it into the 5 gallon jug, and would end up with 4 gallons in the 5 gallon jug.


12 DAYS OF CHRISTMAS
DECEMBER 26, 2010
Today is the day after Christmas and the start of the 12 days of Christmas between Christmas and Epiphany. I have in the past felt that all the trouble with what to buy for Christmas and braving the crowds was somewhat of a let down after 4 hours on Christmas morning. However, I am sure that we all enjoy our gifts and the buying of gifts is good for the economy also.

I have reread the part in my book Holidays and Holy Nights by Christopher Hill about the Epiphany. Evidently the 12 days has roots in  several sources in the ancient calendars. First, and most ancient is the 12 days that ancient calendars added to the year after 12 lunar months of 29 and a half days to make up a solar year. Second, and related was the actual difference between the Roman calendar and lunar calendar of the east, which in the first century resulted in Epiphany being established 12 days after the corresponding day in the Roman calendar.

So we can extend the Christmas spirit for 12 days to the day that is traditionally associated with the arrival of the magi bearing gifts for Jesus. This time is often associated with festivities of the return to time before the laws, and in the courts of 16th century of masks where people would disguise themselves in plays and dances.

The magi may have originally been priests of Zoroastrianism, but came to symbolised  by one white, one black, and one brown wise man  representing the the knowledge of all the world.



</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  </body>
</html>
