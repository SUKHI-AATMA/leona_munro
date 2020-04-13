-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 148.72.232.172:3306
-- Generation Time: Apr 03, 2020 at 12:12 AM
-- Server version: 5.5.51-38.1-log
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leonamunro`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `uniquename` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `project_img` text NOT NULL,
  `project_img_small` text NOT NULL,
  `beds` int(11) NOT NULL,
  `toilet` int(11) NOT NULL,
  `area` varchar(20) NOT NULL,
  `carpet_area` int(11) NOT NULL,
  `parking` int(11) NOT NULL,
  `seating` int(11) NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `sold` int(11) NOT NULL,
  `draft` int(11) NOT NULL,
  `images` text NOT NULL,
  `small_images` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_map` text NOT NULL,
  `interest` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `uniquename`, `description`, `project_img`, `project_img_small`, `beds`, `toilet`, `area`, `carpet_area`, `parking`, `seating`, `featured`, `sold`, `draft`, `images`, `small_images`, `date_added`, `project_map`, `interest`, `status`) VALUES
(29, '6 Ballantyne Street, Waverley', '6-ballantyne-street-waverley', '<p>A very appealing low maintenance brick home in a popular location with loads of scope to make your mark and add value. The home offers 2 good sized bedrooms with built in wardrobes, a separate lounge, open plan kitchen/dining area, combined bathroom plus a separate laundry. The home is heated with a heat pump, has a solar HRV System and offers insulation top and bottom. There is a basement storage area beneath the home. The section is 765m2(+/-) and fully fenced with a free standing single garage and plenty of off street parking. Here is an amazing opportunity for you to purchase in a popular location and add your own personal touch to make this your new home.</p>\n', 'hires.12543-ballantyne-1.jpg', 'https://leonamunro.co.nz/undefined', 2, 1, '', 0, 1, 0, 1, 0, 0, 'hires.12543-ballantyne-1.jpg,hires.17879-ballantyne-6.jpg,hires.18419-ballantyne-9.jpg,hires.22757-ballantyne-3.jpg', 'hires.12543-ballantyne-1.jpg,hires.17879-ballantyne-6.jpg,hires.18419-ballantyne-9.jpg,hires.22757-ballantyne-3.jpg', '2020-01-12 22:34:50', '', 'tender', 1),
(37, '2 Windsor Place, Mosgiel', '2-windsor-place-mosgiel', '<p>Here it is - your next family home! Positioned on a well maintained freehold section in a quiet cul-de-sac in a great location. With ample accommodation and generous living, the home offers brilliant proportions and separation for families; three living spaces, four double bedrooms (two up, two down), and two bathrooms.The top floor has a modern galley style kitchen which is open to the living and dining area, heated by multi burner and heat pump. A further separate lounge off this area opens to a balcony. Through the hallway you&#39;ll find two double bedrooms with buil-in wardrobes, a separate bathroom with spa bath and shower, plus a separate toilet. The lower level is made up of a living/dining area, two double bedrooms, kitchenette and bathroom plus the internal access double garage. This level opens to a fantastic sheltered BBQ area ideal for alfresco living in any weather. From here you can access the private well-manicured and fully fenced backyard with glasshouse and paved patio area. Every family will see different possibilities here! If family living and quality of life is important, you won&#39;t want to miss this one.</p>\n', 'hires.30279-2WindsorPl54.jpg', 'https://leonamunro.co.nz/hires.30279-2WindsorPl54.jpg', 4, 2, '', 0, 2, 0, 1, 0, 0, 'hires.6347-2WindsorPl40.jpg,hires.7788-2WindsorPl46.jpg,hires.13879-2WindsorPl47.jpg,hires.30279-2WindsorPl54.jpg', 'hires.6347-2WindsorPl40.jpg,hires.7788-2WindsorPl46.jpg,hires.13879-2WindsorPl47.jpg,hires.30279-2WindsorPl54.jpg', '2020-03-06 01:47:53', '', 'auction', 1),
(38, '3 Shore Street Musselburgh', '3-shore-street-musselburgh', '<p>There&#39;s plenty of space for the family to grow and enjoy this brick and tile home. Inside there is a separate lounge which is heated by a Masport fire with in-built fan and down the light filled hallway is the spacious, bright open plan kitchen/dining area with polished wooden floors. There are 2 double bedrooms with built-in storage and a third single bedroom. Family bathroom and separate toilet. The back section is fully fenced and private making it a great space for your children and pets. Basement tandem garaging with a workshop and plenty of storage. With Bayfield High directly across the road, the morning school run will be a thing of the past. This home offers plenty of sun with its north facing aspect and is well situated close to all amenities. It will be extremely popular so early viewing is recommended.</p>\n', 'hires.27455-5.jpg', 'https://leonamunro.co.nz/hires.27455-5.jpg', 3, 1, '', 0, 2, 0, 1, 0, 0, 'hires.13536-1.jpg,hires.27455-5.jpg,hires.31048-35.jpg,hires.31293-6.jpg', 'hires.13536-1.jpg,hires.27455-5.jpg,hires.31048-35.jpg,hires.31293-6.jpg', '2020-03-06 01:50:33', '', 'tender', 1),
(40, '5 Spiers Road - Halfway Bush', '5-spiers-road-halfway-bush', '<p>This fabulous brick property is ideal in every way. It offers the first home buyer an opportunity to start out in a popular location with plenty of upgrade potential. Three double bedrooms, two of which have built in wardrobes and the third opens to sunny double glazed conservatory. The living area is heated by a fire and heat pump and opens to a light-filled modern kitchen. The back yard is tranquil with the trickle of a pleasant creek with a bridge and lovely garden area. There is off street parking at the front of the property. This home offers plenty of scope to make it your own so be in quick, call me today.</p>\n', 'hires.19974-1.jpg', 'https://leonamunro.co.nz/https://leonamunro.co.nz/hires.19974-1.jpg', 3, 1, '', 0, 0, 0, 1, 0, 0, 'hires.18255-22.jpg,hires.19974-1.jpg,hires.20472-21.jpg,hires.21464-9.jpg', 'hires.18255-22.jpg,hires.19974-1.jpg,hires.20472-21.jpg,hires.21464-9.jpg', '2020-03-06 02:01:55', '', 'deadline', 1),
(43, '4 Prosser Street, Green Island', '4-prosser-street-green-island', '<p>Make yourself at home in this well-loved villa tucked away in its own private piece of Green Island. This home offers two double bedrooms off the hallway which leads to a large open plan living/dining area with new carpet, wood burner and heat pump. There is also ceiling &amp; underfloor insulation. A separate galley style kitchen to the rear of the house leads out to a level, fully fenced rear yard which has the bonus of a separate standalone fully powered hobby room/mancave. The 875m2 (+/-) section is well established and offers great areas for the kids to play and pets to roam. There is ample off street parking and plenty of space to add a garage. This home has so much going for it however also offers potential to add your own flair. Make viewing a priority!</p>\n', 'hires.24725-prosser-2.jpg', 'hires.24725-prosser-2.jpg', 2, 1, '', 0, 0, 0, 0, 1, 0, 'hires.24103-prosser-11.jpg,hires.24725-prosser-2.jpg,hires.24872-prosser-1.jpg,hires.31412-prosser-4.jpg', 'hires.24103-prosser-11.jpg,hires.24725-prosser-2.jpg,hires.24872-prosser-1.jpg,hires.31412-prosser-4.jpg', '2020-03-15 22:12:44', '', 'deadline', 1),
(44, '5 Wallace Street, Roslyn', '5-wallace-street-roslyn', '<p>Properties such as this are becoming increasingly rare and more sought after than ever. When location matters, it doesn&#39;t get any better than this beauty sitting in the heart of one of Dunedin&#39;s premier suburbs and only minutes from the city centre. This family home sits proudly as you drive up Wallace Street while providing many classic art deco features. Enter the front door into the foyer and to the left is the formal lounge, a great place to entertain family and friends. The open plan functional kitchen/dining/living forms the central hub of the residence. This level also has a single bedroom, separate laundry, separate toilet and a small original cloak room. The wide stairway leads up to 3 more bedrooms and a separate retro family bathroom with polished wooden floors. At the top of the stairs, a window boasts the lovely view out towards the harbour. The large master bedroom has access to a sunny balcony which overlooks the back yard, an ideal spot for your morning coffee or an evening bubbly. The exterior has been meticulously maintained and repainted and oozes street appeal. The gardens are low maintenance and the 520sqm (+/-) section is fully fenced creating a great space for kids and pets to play. The sunny patio out the back is an ideal place for those summer barbeques with family and friends. To complete the package, there is internal access to a large garage/workshop and storage area and there is also a carport to accommodate all the vehicles. Homes in this location are hard to come by so I welcome your call today. Early viewing is highly recommended.</p>\n', '5 wallace-46.jpg', '5 wallace-46.jpg', 4, 1, '', 0, 1, 0, 1, 1, 0, '5 wallace st-9.jpg,5 wallace-23.jpg,5 wallace-31.jpg,5 wallace-46.jpg', '5 wallace st-9.jpg,5 wallace-23.jpg,5 wallace-31.jpg,5 wallace-46.jpg', '2020-03-15 22:16:01', '', 'auction', 1),
(45, '6 Frances St, Taieri Mouth', '6-frances-st-taieri-mouth', '<p>You&#39;ll love this spacious and delightful home so much it will be hard to ever leave! The home is sure to impress with its four bedrooms, two bathrooms and two living areas allowing the whole family plenty of space to enjoy the tranquil lifestyle that Taieri Mouth has to offer. The lower floor consists of a large open plan kitchen/dining/living area that opens to a huge sun soaked deck with views out to the ocean. Down the hallway are three double bedrooms serviced by a large family bathroom. Upstairs you will discover another bedroom with ensuite and a second living area. The house is heated by a multi burner and kept cozy with ceiling insulation. The section is fully fenced and has a generous lawn with the bonus of a private &amp; funky patio area to the rear with rural views. This home has so much to offer so take the leisurely coastal drive from Dunedin and enjoy the very best this lifestyle can offer. Contact me today for more details.</p>\n', 'hires.7736-10.jpg', 'hires.7736-10.jpg', 4, 2, '', 0, 0, 2, 1, 0, 0, 'hires.4675-7.jpg,hires.7736-10.jpg,hires.19859-9.jpg,hires.28240-40.jpg', 'hires.4675-7.jpg,hires.7736-10.jpg,hires.19859-9.jpg,hires.28240-40.jpg', '2020-03-15 22:27:48', '', 'deadline', 1),
(46, '6A Christie Street, Abbotsford', '6a-christie-street-abbotsford', '<p>This property offers first home buyers a very exciting opportunity. All the hard work has been done from top to toe with its brand new roof completed in February 2018 to the partial double glazing, rewiring and insulation top and bottom. All it needs to be finished is a few cosmetic touches to complete the overhaul. The property offers 3 bedrooms serviced by a modern bathroom with separate bath and shower. The separate kitchen/dining is sure to impress and a separate living area opens through double glazed ranch sliders to a sunny outdoor area ideal for a quiet cup of coffee or entertaining family and friends. Heating is by a heatpump. Separate laundry in basement with lots of storage options. This home is situated up a private drive and is positioned to make the most of the sun and views over Abbotsford/Green Island. The 718m2 (+/-) section is fully fenced and offers ample space for kids and pets. To top it off this home offers double garaging plus off street parking. Don&#39;t miss your opportunity to own this wee cracker, you don&#39;t want to be disappointed.</p>\n', 'hires.1877-2editededited-1.jpg', 'hires.1877-2editededited-1.jpg', 3, 2, '', 0, 0, 0, 0, 1, 0, 'hires.1877-2editededited-1.jpg,hires.15011-27.jpg,hires.16717-5.jpg,hires.24312-4.jpg', 'hires.1877-2editededited-1.jpg,hires.15011-27.jpg,hires.16717-5.jpg,hires.24312-4.jpg', '2020-03-15 22:32:53', '', 'deadline', 1),
(47, '6A Wavy Knowes Drive, Waldronville', '6a-wavy-knowes-drive-waldronville', '<p>This property has it all and is sure to impress any family that likes to live in a little bit of luxury. Built in 2006, this home proudly sits on a fantastic 4336m2 (+/-) section in the Wavy Knowes subdivision that is private, prestigious, sunny and handy to town. The layout is designed with entertaining in mind and is apparent from the moment you walk through the front door into the wide tiled entry to the open kitchen with all its modern appliances and into the large living area with feature gas fireplace and heatpump. This home has been specifically designed to maximise living space so you can entertain with ease. Four good sized bedrooms (3 double &amp; 1 single), all with built in wardrobes and the master featuring a walk-in wardrobe and ensuite with his &amp; her sinks. Modern family bathroom and separate laundry with plenty of storage options throughout the home. This property boasts many features from its high spec central heating/cooling system, double glazing, internal vacuum system, in-built speakers inside and out, burglar/smoke alarm system and a wrought iron electric gate with keypad entry for security. The indoor/outdoor flow from the living areas to a sun drenched deck with stunning rural views is ideal for entertaining and the private covered spa is there for the families pleasure. The garden has been landscaped and has a raised vege bed and glasshouse for the garden enthusiast plus there is the option to purchase the ride-on lawn mower for the large section. There is certainly plenty of room for a horse, sheep or chickens, the choice is yours to enjoy the country lifestyle. An internally accessed oversized 8x6 carpeted double garage with loft storage plus a separate single garage with workshop and stable will certainly take care of your vehicles. This picture perfect home and setting will surprise you with its many features and deserves your immediate attention today.</p>\n', 'hires.3623-4.jpg', 'hires.3623-4.jpg', 4, 2, '', 0, 3, 0, 1, 0, 0, 'hires.3623-4.jpg,hires.9771-9.jpg,hires.17166-WAVYKNOWES238.jpg,hires.30947-WAVYKNOWES211.jpg', 'hires.3623-4.jpg,hires.9771-9.jpg,hires.17166-WAVYKNOWES238.jpg,hires.30947-WAVYKNOWES211.jpg', '2020-03-15 22:35:17', '', 'tender', 1),
(48, '7 Wavy Knowes Drive, Waldronville', '7-wavy-knowes-drive-waldronville', '<p>This wonderful property has it all and is sure to impress any family. Situated beautifully for privacy and on a 6720m2 (+-) of land offering lots of options within easy proximity to the city. The three bedrooms in this family home all have built in wardrobes and the master also has an ensuite. Modern family bathroom and separate laundry. Country style kitchen, study nook and open plan dining that leads to a good sized lounge with wood burner. The dining also leads outside to a lengthy Kwila deck where you can enjoy a bbq with family and friends while overlooking the beautifully established landscaped section. Beyond the immediate fencing around the home, the lands opens up to options for grazing sheep, horses or alpacas. The choice is yours. Raised vege beds, glasshouse and maybe you would like to have your own chickens and live the good life. Drive through the gates and down the sweeping driveway lined with numerous varieties of fruit trees to the internally accessed double garage. Pack up and move to a new lifestyle which is sure to please the whole family. This property will be in great demand so view today. TENDER closing on Thursday 29 March 2018 at 2.00pm in our Dunedin Office, 12 Wharf Street (No Prior Offers Considered)</p>\n', 'hires.11427-10.jpg', 'hires.11427-10.jpg', 3, 2, '', 0, 2, 0, 0, 1, 0, 'hires.11427-10.jpg,hires.14908-30.jpg,hires.18648-9.jpg,hires.20761-1.jpg', 'hires.11427-10.jpg,hires.14908-30.jpg,hires.18648-9.jpg,hires.20761-1.jpg', '2020-03-15 22:37:47', '', 'tender', 1),
(49, '10 Sunninghurst Drive, Fairfield', '10-sunninghurst-drive-fairfield', '<p>Are you and your family looking for a quality home that has incredible space contemporary lines and an immediate Wow! Then I have found the perfect home for you. From the moment you open the front gate into the private courtyard and enter this home through the atrium into the light filled foyer, you will be amazed with the abundance of elegant detailing this home has on offer. The spacious open plan lounge, dining and kitchen area has a variety of layout possibilities to make your entertaining a breeze. The modern functional kitchen boasts stainless steel appliances and a family size kitchen bar. Heated by a modern pallet fire and large heat pump plus double glazing throughout means the family can enjoy cosy living all year round. This five double bedroom (master with ensuite and walk in wardrobe) home shares a large family combined bathroom. Storage is plentiful throughout this property. The 1060m2 (+/-) section is nicely manicured and has a wonderful big driveway sweeping into the 4 car internally accessible garaging and allowing for plenty of off street parking. There is also grass areas for the kids to play and a covered area for the spa pool, entertainment for the whole family. Take action now, this home deserves your special attention and your family deserves this special home.</p>\n', 'hires.8442-5.jpg', 'hires.8442-5.jpg', 5, 2, '', 0, 4, 0, 1, 1, 0, 'hires.8442-5.jpg,hires.9251-14.jpg,hires.18853-45.jpg,hires.31006-8.jpg', 'hires.8442-5.jpg,hires.9251-14.jpg,hires.18853-45.jpg,hires.31006-8.jpg', '2020-03-15 22:43:12', '', 'deadline', 1),
(50, '11 Gresham Street Andersons Bay', '11-gresham-street-andersons-bay', '<p>This fabulous home has room for all the family and balances the character features of old with the convenience of modern living. On offer are 4 bedrooms, all with generous wardrobes and master with spacious ensuite. The family bathroom, wide hallways and high ornate ceilings compliment this area of the house and lead through to an open plan modern kitchen with ample space and a separate storage and laundry area. The kitchen looks over a large dining/living area with indoor/outdoor flow to a deck. The home is heated by a good sized fire and a hallway heatpump. There is also a moisture master for convenience. Outside you will find a large, beautiful, established and very unique backyard area with terraced entertaining area and wooden walkway through the peaceful garden. The children will be happy with their own play area which can be supervised from parts of the house and deck. Completing this exciting package is a standalone garage with good sized workshop and off street parking. You and your family will love this home so much you will never need to move again.</p>\n', 'hires.12652-15.jpg', 'hires.12652-15.jpg', 4, 2, '', 0, 1, 0, 0, 0, 0, 'hires.8541-11.jpg,hires.12652-15.jpg,hires.19594-10.jpg,hires.21678-8.jpg', 'hires.8541-11.jpg,hires.12652-15.jpg,hires.19594-10.jpg,hires.21678-8.jpg', '2020-03-16 00:15:32', '', 'deadline', 1),
(51, '13A Forfar Street, Mosgiel', '13a-forfar-street-mosgiel', '<p>This property WILL be sold! get in quick. We have just what you&#39;ve been waiting for. This fabulous brick stand-alone townhouse, built in 2011, offers two large double bedrooms, the master boasting a walk-in wardrobe. The spacious living area can be separated with a cavity slider and flows to a modern kitchen/dining area that looks out over the trees through private tinted windows. There is double glazing and insulation throughout and a floor mounted heat pump. The lounge opens to a sheltered and sunny deck area and you can follow the sun around to the second outdoor area off the dining room. Furthermore the home offers a bathroom with bath and shower plus a separate toilet. Single garage with laundry area and internal access. The section is low maintenance and has lovely maintained gardens and a raised veggie garden. This modern home will appeal to a range of buyers so contact me today to live your Mosgiel dream.</p>\n', 'hires.17768--7.jpg', 'hires.17768--7.jpg', 2, 1, '', 0, 1, 0, 0, 0, 0, 'hires.8845--23.jpg,hires.17768--7.jpg,hires.18320--6.jpg,hires.28903--1.jpg', '', '2020-03-16 00:17:54', '', 'auction', 1),
(52, '17 Wakari Road, Halfway Bush', '17-wakari-road-halfway-bush', '<p>Here is a fantastic opportunity to purchase this family home on a large 1834m2 (+/-) private, established section close to the city. The home boasts 3 double bedrooms with plenty of storage, a separate toilet and the tidy family bathroom comes with a bath and bathroom heater. The separate living room flows to the spacious open plan modern kitchen/dining with polished wooden floors. The home has just had a new roof and is heated by a fire, nightstore, moisture master system and is insulated top and bottom. The section is fully fenced making it ideal for children and pets, especially with the dog park across the road. The stand-alone garage and plenty of off street parking will take care of your vehicles. All situated in a very popular suburb, you will need to be quick to view this one.</p>\n', 'hires.29592-1a.jpg', 'hires.29592-1a.jpg', 3, 1, '', 0, 1, 0, 1, 0, 0, 'hires.4680-6.jpg,hires.25335-12.jpg,hires.26004-5.jpg,hires.29592-1a.jpg', 'hires.4680-6.jpg,hires.25335-12.jpg,hires.26004-5.jpg,hires.29592-1a.jpg', '2020-03-16 00:20:32', '', 'deadline', 1),
(53, '18 Luke Street, Ocean Grove', '18-luke-street-ocean-grove', '<p>Look no further, this is it! Located in the sunny, beachside community of Ocean Grove this 1960&#39;s permanent material home offers separate kitchen/dining with a separate lounge kept cosy by heat pump and ceiling insulation. Off the hallway are 3 double bedrooms and a modern combined bathroom. There is a large standalone garage with workshop area plus plenty of off-street parking. The fabulous, private backyard will surprise you. Well established and fully fenced with sunny reclusive outdoor area to sit and read your favorite book. Also with a glasshouse and plenty of space for the kids and pets to roam. With a Nature reserve close by and the call of rolling waves from Tomahawk beach right across the road this home offers an enviable lifestyle. All this and only 10 minutes from town and a bus stop at the end of the street! Wow don&#39;t hesitate Act now call Leona Munro today.</p>\n', '18 luke st-1.jpg', '18 luke st-1.jpg', 3, 1, '', 0, 1, 0, 1, 0, 0, '18 luke st-1.jpg,18 luke st-9.jpg,18 luke st-14.jpg,18 luke st-15.jpg', '18 luke st-1.jpg,18 luke st-9.jpg,18 luke st-14.jpg,18 luke st-15.jpg', '2020-03-16 00:23:01', '', 'deadline', 1),
(54, '25 Connor Place, Brighton', '25-connor-place-brighton', '<p>You&#39;ll love this spacious, fully renovated modern and delightful home so much, it will be hard to ever leave! The home comprises of two double bedrooms, master with ensuite, walk-in wardrobe and doors leading out to the deck. Spacious open plan living/dining/kitchen with easy outdoor flow through 2 sets of double doors to the enormous partially covered deck bathed in sun, ideal for entertaining. The kitchen boasts a fisher and Paykel oven and dish drawer and a gas hob and water. The home is heated by heatpump and yunca fire which is contained with the full double glazing. Situated on a private double section with plenty of room for the boys toys, raised organic vegetable garden, room for a few chickens, a separate hobby room and the 3 bay versatile garage will house your vehicles and bikes etc. The local school is within walking distance and you can enjoy a 2 minute walk down a private track to the beach. What more could you want in the summer? Come and join the friendly Taieri Mouth community which is only a 25 minute drive from Dunedin airport for commuters. Early viewing is highly recommended.</p>\n', 'hires.9949-18.jpg', 'hires.9949-18.jpg', 2, 2, '', 0, 3, 0, 1, 0, 0, 'hires.9949-18.jpg,hires.20300-21.jpg,hires.24345-29.jpg,hires.31977-15.jpg', 'hires.9949-18.jpg,hires.20300-21.jpg,hires.24345-29.jpg,hires.31977-15.jpg', '2020-03-16 00:32:21', '', 'deadline', 1),
(55, '29 Connor Place, Taieri Mouth', '29-connor-place-taieri-mouth', '<p>It doesn&#39;t get much better than this! Cleverly designed for minimalist living, this house could be your perfect modern beach pad, lock and leave, or home. This little gem is sure to surprise you with 3 bedrooms, combined bathroom, separate laundry and open plan kitchen/dining/living with indoor/outdoor flow to a sun drenched deck. Also fully double glazed, insulated and heated by woodburner for the cooler evenings. This home is tastefully decorated to suit it&#39;s environment and will be sold complete with all furnishings. This property offers a standalone single garage with an over-sized carport, ideal for the campervan or caravan plus ample off street parking. The fully fenced section with a beach themed garden and a second patio area for entertaining. This unique home is one of a kind, so why not be part of this vibrant community and enjoy the lifestyle that Taieri Mouth offers.</p>\n', 'hires.14312-connorpl-6.jpg', 'hires.14312-connorpl-6.jpg', 3, 1, '', 0, 2, 0, 1, 0, 0, 'hires.9090-connorpl-8.jpg,hires.9423-connorpl-7.jpg,hires.14191-connorpl-5.jpg,hires.14312-connorpl-6.jpg', 'hires.9090-connorpl-8.jpg,hires.9423-connorpl-7.jpg,hires.14191-connorpl-5.jpg,hires.14312-connorpl-6.jpg', '2020-03-16 00:37:41', '', 'deadline', 1),
(56, '30D Riccarton Road, East Taieri', '30d-riccarton-road-east-taieri', '<p>Wow what a stunning family home in a private setting that anyone would be proud to call their own. Built in 2011, this 4 bedroom + executive office home comes with an abundance of features, many being up-sized. The spacious open plan lounge, dining and designer kitchen flows seamlessly through the green tinted glass stacker sliding doors opening to the north facing entertainers patio and designer landscaped gardens. This home has been specifically designed to maximise living space so you can entertain with ease. This also includes the media room with its own woodburner. Master bedroom has walk-in wardrobe and ensuite and the other 3 bedrooms have built in wardrobes. This property also allows you to work from home with a generous sized executive office. Combined tiled family bathroom plus another separate toilet for convenience, not to mention the wonderful laundry. Oversized 7x7 garage with loft storage and internal access. Ample off street parking including room for a trailer. The &quot;backyard&quot; is also landscaped with raised veggie bins, garden shed, designer hedges and a flat well cared for lawn, an ideal spot for the kids and pets. If ceiling sky-lights, underfloor heated tiles, in-ceiling sound system, remote controlled blinds and a fully irrigated garden system are on your wish list, then you need to view this property. It is picture perfect and will surprise you with its features and stylish quality build.</p>\n', 'hires.9719-2.jpg', 'hires.9719-2.jpg', 4, 2, '', 0, 2, 0, 1, 0, 0, 'hires.9719-2.jpg,hires.9937-7.jpg,hires.15010-1.jpg,hires.29491-DronePicbluesky4.jpg,hires.29728-5.jpg', 'hires.9719-2.jpg,hires.9937-7.jpg,hires.15010-1.jpg,hires.29491-DronePicbluesky4.jpg,hires.29728-5.jpg', '2020-03-16 00:43:08', '', 'tender', 1),
(57, '38 Delta Drive, Waldronville', '38-delta-drive-waldronville', '<p>Here&#39;s an opportunity to get you onto the property market in a popular location. The kitchen/dining area offers a light and bright space that opens through an archway to the living area that forms the hub of the home. Heated by a multi burner for those cooler evenings or open the door onto the sunny and sheltered deck where you can entertain with family and friends. This is a great place to start your day with your morning coffee, or unwind with a glass of wine at the end of the day. The hallway leads to three bedrooms, two double and one single, plus a combined family bathroom. The versatile room found off the separate laundry area could be anything you require from a second living space to a hobby room or studio. The house is accompanied by an enviable standalone garage/workshop and plenty of off street parking for cars and the boat. Private fully fenced flat back yard gives the family space to kick a ball around or jump on the trampoline and play the day away. Get this property to the top of your list and come see it for yourself. Contact me today.</p>\n', '38 delta-3.jpg', '38 delta-3.jpg', 3, 1, '', 0, 1, 0, 1, 0, 0, '38 delta-3.jpg,38 delta-13.jpg,38 delta-32.jpg', '38 delta-3.jpg,38 delta-13.jpg,38 delta-32.jpg', '2020-03-16 00:45:29', '', 'deadline', 1),
(58, '50 Gladstone Road North, Mosgiel', '50-gladstone-road-north-mosgiel', '<p>This impressive homestead built in the 1920&#39;s is sure to please. Built to last with double brick and a new Gerard tile roof in 2017. Sitting proudly on a 1300sqm (+/-) landscaped and well manicured section that includes a private BBQ deck area overlooking the sunny rolling hills and off street parking for 5+ cars. Inside this elegant home the grand spacious hallway leads you to a formal lounge, dining room, 4-5 bedrooms, 2 modern bathrooms and 3 toilets. The hub of the home is a stunning bespoke shaker style light and airy designer kitchen complete with polished floors, gas hob and stainless steel wall oven, dishwasher and double fridge/freezer. New plumbing and gas hot water has been installed and two heat pumps ensure you are kept warm over the cooler months. The features are endless in this home including ornate ceilings, stained glass windows, wooden features and the ideal basement space for storage or a wine cellar. A separate external office can be entered off the front verandah. New carpet and decor has transformed this property into a lovely mix of traditional character with a modern twist.The lucky new purchasers will be proud to own this piece of history that is often admired and seldom found in the ever popular Mosgiel.</p>\n', 'hires.4228-50gladstone-2.jpg', 'hires.4228-50gladstone-2.jpg', 5, 2, '', 0, 0, 0, 1, 1, 0, 'hires.3965-50gladstone-5.jpg,hires.4228-50gladstone-2.jpg,hires.12213-50gladstone-15.jpg,hires.12993-50gladstone-8.jpg,hires.13984-50gladstone-6.jpg', 'hires.3965-50gladstone-5.jpg,hires.4228-50gladstone-2.jpg,hires.12213-50gladstone-15.jpg,hires.12993-50gladstone-8.jpg,hires.13984-50gladstone-6.jpg', '2020-03-17 00:52:53', '', 'deadline', 1),
(59, '52 Lewis Street, Deborah Bay', '52-lewis-street-deborah-bay', '<p>Calling all builders, handymen, developers and opportunity seekers. Renovate, restore or start again...the options are many - you decide! This North facing sunny character, two storey, three bedroom home is in the sought after area of Deborah Bay. Sitting on just over 7 acres of idyllic rural splendour (2.9340 Ha +/-) with well established trees and your own supply of firewood with the mature gumtrees. This is a unique private lifestyle opportunity with fantastic rural views that deserves your special attention.</p>\n', 'hires.2755-10.jpg', 'hires.2755-10.jpg', 3, 1, '', 0, 0, 0, 1, 0, 0, 'hires.2755-10.jpg,hires.4210-33.jpg,hires.4596-39.jpg,hires.4667-37.jpg', 'hires.2755-10.jpg,hires.4210-33.jpg,hires.4596-39.jpg,hires.4667-37.jpg', '2020-03-17 01:07:36', '', 'auction', 1),
(60, '71 Tahuna Road, Tainui', '71-tahuna-road-tainui', '<p>This modern 1940&#39;s brick bungalow in a sought after location, is a fantastic first home, investment or downsizing opportunity. The home consists of 2 good sized bedrooms (master with large dressing room), a separate kitchen/dining area with laundry that leads to a separate living area and modern bathroom. The home is insulated and easily heated by the multi-burner and heat pump. There is a basement area beneath the house for storage and a level section to enjoy. With a golf course across the street, a school within walking distance, the city centre just over the hill and the beach a short walk away, you will enjoy everything this home has to offer. Immediate possession available so be in quick, this one will be popular.</p>\n', 'hires.1489-4.jpg', 'hires.1489-4.jpg', 2, 1, '', 0, 0, 0, 1, 0, 0, 'hires.1489-4.jpg,hires.12232-7.jpg,hires.25067-2.jpg', 'hires.1489-4.jpg,hires.12232-7.jpg,hires.25067-2.jpg', '2020-03-17 01:11:15', '', 'deadline', 1),
(61, '83 Dick Road, Portobello', '83-dick-road-portobello', '<p>Off the beaten track, yet close to Portobello, this 17.8Ha property bordering the beautiful Papanui Inlet, affords its new owners a rarely available, idyllic lifestyle opportunity.<br />\nNestled in a private setting, the 1980&#39;s Mason &amp; Wales architecturally designed home has recently been extended to cater for the demands of larger family living.<br />\nThe new designer kitchen is strategically positioned to be the hub of the home; whether for family dining or formal entertaining. Exposed wooden beamed ceilings are a special feature of the open-plan kitchen-living area and the separate lounge with open fire.<br />\nSeamless flow to the 46m2 deck by two sets of bi-fold doors; wonderful for entertaining, soaking up the sun or enjoying the unobstructed night sky. The rest of the ground floor has two double bedrooms and two bathrooms.<br />\nUpstairs you will discover the master bedroom with nursery or study, plus another double bedroom and third bathroom. All bedrooms have BIW&#39;s and throughout the home you&#39;ll find extra storage nooks and cupboards. The home is heated by woodburner and large heatpump and mostly double-glazed and insulated for year round warmth.<br />\nVehicles are accommodated with double garaging plus workshop area and ample OSP.<br />\nThe thoughtfully planted property provides sun, shelter and shade for stock and is of a suitable size for grazing animals and chooks.<br />\nRich in local history, it was one of the first dairy farms on the Peninsula, remnants of the original homestead can still be found among the well-established stands of Scotch pines and Pinus radiata. Especially notable, it includes part of the Salt Marshes within its boundaries. This increasingly rare habitat is frequented by a diverse range of wildlife including pukeko, paradise ducks, herons, kingfishers, spoonbills and all manner of terns.<br />\nJust a leisurely 35-minute drive from the city, this property is a one-off opportunity for you to secure a true piece of paradise.</p>\n', 'hires.9765-dick-33.jpg', 'hires.9765-dick-33.jpg', 4, 3, '', 0, 2, 0, 1, 0, 0, 'hires.7515-dick-23.jpg,hires.9765-dick-33.jpg,hires.11327-dick-20.jpg,hires.18028-dick-1.jpg', 'hires.7515-dick-23.jpg,hires.9765-dick-33.jpg,hires.11327-dick-20.jpg,hires.18028-dick-1.jpg', '2020-03-17 01:13:13', '', 'deadline', 1),
(62, '85B Tahuna Road, Tainui', '85b-tahuna-road-tainui', '<p>This semi-detached unit offers modern living with great indoor-outdoor flow from the open plan kitchen/dining/living area to a sunny and private patio ideal for entertaining. This home offers two double bedrooms with built-in wardrobes, a combined modern bathroom, very tidy kitchen and large living/dining space. Freshly painted throughout and new carpet. Heated by a wood burner, ceiling insulation and an HRV System, this home will keep you warm all year round. Relax to the peaceful sound of the creek trickling through the back of the property from the sunny garden and patio area. Off street parking for one vehicle. In a prime location close to quality decile 10 schools and directly opposite the golf course, this home would make a great investment, first home or downsize opportunity. Early viewing is highly recommended.</p>\n', 'hires.1757-tahuna-2.jpg', 'https://leonamunro.co.nz/hires.1757-tahuna-2.jpg', 2, 1, '', 0, 0, 0, 0, 1, 0, 'hires.1757-tahuna-2.jpg,hires.15208-tahuna-6.jpg,hires.17286-tahuna-9.jpg', 'hires.1757-tahuna-2.jpg,hires.15208-tahuna-6.jpg,hires.17286-tahuna-9.jpg', '2020-03-17 01:15:27', '', 'tender', 1),
(63, '86 Columba Avenue, Calton Hill', '86-columba-avenue-calton-hill', '<p>You will simply love this cosy beautifully presented home. Whether you live in it yourself or secure it as a rental, this wee beauty offers the next lucky owners a very comfortable lifestyle. Offering two double bedrooms, master with feature wall and both with built in wardrobes and a combined bathroom. The open plan modern kitchen/dining leads through to a separate living area. Downstairs offers a good sized laundry with plenty of basement storage. Keep warm with the heat pump and wood fire plus ceiling &amp; underfloor insulation. The home overlooks a mostly fenced generous section. Reap the rewards all year round from the established veggie garden. Be in quick, these properties are in hot demand!</p>\n', 'hires.15943-4.jpg', 'hires.15943-4.jpg', 2, 1, '', 0, 0, 0, 1, 0, 0, 'hires.3382-10.jpg,hires.4120-2.jpg,hires.15943-4.jpg,hires.30968-5.jpg', 'hires.3382-10.jpg,hires.4120-2.jpg,hires.15943-4.jpg,hires.30968-5.jpg', '2020-03-17 01:19:57', '', 'tender', 1),
(64, '104 Barr Street, Kenmure', '104-barr-street-kenmure', '<p>Here is an amazing opportunity for your family to own this fantastic light filled 4 bedroom home in a sought after location. The stylish kitchen has a separate butlers pantry/laundry and flows seamlessly to the dining/living area with indoor/outdoor flow through sliding doors to a sun-drenched deck. All four bedrooms are doubles with built in wardrobes and share a family sized bathroom with bath and shower and separate toilet. The backyard is large and ideal for your children and pets to enjoy. Enhancing this property even further is the lower level which offers 2 large utility rooms and an abundance of storage with internally accessed three car garaging plus off street parking. This home will make one lucky family very happy so make sure you secure it for yourself today!</p>\n', 'hires.9110-6.jpg', 'hires.9110-6.jpg', 4, 1, '', 0, 3, 0, 1, 0, 0, 'hires.1966-17.jpg,hires.8958-15.jpg,hires.9110-6.jpg,hires.14431-7.jpg', '', '2020-03-17 01:26:55', '', 'tender', 1),
(65, '134 Cavell Street, Tainui', '134-cavell-street-tainui', '<p>This captivating home has been beautifully redecorated to showcase 1930s character while embracing contemporary comfort and convenience. The home offers 3 bedrooms (2 double and 1 single), a separate living room, separate open plan kitchen/dining area and modern bathroom. The home has been fully rewired, is well insulated and heated by a heat pump. The section is low maintenance offering multiple entertaining areas and a standalone garage that has been converted into a workshop plus off street parking. This home is packed full of charm and located close to all amenities. It will be popular with first home buyers and investors. Early viewing is recommended so contact Leona Munro today.</p>\n', 'hires.28796-3.jpg', 'https://leonamunro.co.nz/hires.28796-3.jpg', 3, 1, '', 0, 0, 0, 1, 0, 0, 'hires.25663-11.jpg,hires.28796-3.jpg,hires.28900-6.jpg', 'hires.25663-11.jpg,hires.28796-3.jpg,hires.28900-6.jpg', '2020-03-17 20:43:31', '', 'tender', 1),
(66, '148 Beach Street, Waikouaiti', '148-beach-street-waikouaiti', '<p>Prepare to be totally and utterly charmed by this delightful cottage on a private section just a short stroll from the beach. It offers combined kitchen/dining leading through to a separate lounge heated by a wood burner. Off the hallway are two double bedrooms with built-in wardrobes, combined bathroom and a sunroom which can be accessed through double doors from the master bedroom. The sunroom leads out through French doors to a deck which overlooks the impressive section with a combination of fruit trees and vegetable gardens. Among the gardens is a standalone shed with a second toilet. There is also a second patio area with built-in seating. Completing this property is a stand-alone double garage. Act fast to secure this lovely property as your home or weekend retreat, call Leona Munro today.</p>\n', 'beach-6.jpg', 'beach-6.jpg', 2, 1, '', 0, 2, 0, 1, 0, 0, 'beach-6.jpg,beach-8.jpg,beach-14.jpg', 'beach-6.jpg,beach-8.jpg,beach-14.jpg', '2020-03-17 20:46:07', '', 'deadline', 1),
(67, '196 Moturata Road, Taieri Mouth', '196-moturata-road-taieri-mouth', '<p>Here is your opportunity to own a property which offers you a tranquil lifestyle change. Make this your permanent home or your holiday getaway just in time for summer. This modern contemporary home includes three double bedrooms (master with ensuite) over two levels. On entry through the front door you will be greeted by a feature gas fire that heats the spacious, light open plan living/dining/kitchen area. The modern kitchen with dishwasher and gas hob caters well for the chef of the family. This level also has 2 double bedrooms, a modern combined bathroom and a separate laundry. Upstairs is a second living area which opens to a balcony situated for sun with panoramic rural and ocean views. The master bedroom is also on this level with a spacious ensuite. This home is double glazed, fully insulated and has two heat pumps (one upstairs &amp; one down), ensuring year round warmth and convenience. A big bonus of this property is the 14 solar panels on the garage roof that help you keep the electric bills economical. There is a stand alone double garage with plenty of off street parking for the boat or caravan. The well established section is a generous 1223m2 (+/-) and situated back from the street for privacy. All this, only a leisurely 30 minute coastal drive from the hustle and bustle of Dunedin city to your new paradise in Taieri Mouth.</p>\n', 'hires.2546-11.jpg', 'hires.2546-11.jpg', 3, 2, '', 0, 2, 0, 1, 0, 0, 'hires.2546-11.jpg,hires.2626-1.jpg,hires.27569-15.jpg,hires.27841-7.jpg', 'hires.2546-11.jpg,hires.2626-1.jpg,hires.27569-15.jpg,hires.27841-7.jpg', '2020-03-17 20:47:48', '', 'deadline', 1),
(68, '224 North Road, North East Valley', '224-north-road-north-east-valley', '<p>This is truly an extraordinary opportunity! The Historic St David&#39;s Presbyterian Church is now your canvas to create something truly unique and very special. This early English style church was designed by architect James Hislop and completed in 1885 with additions by Edmund Anscombe in 1912. Complete with original features including largely kauri and rimu timber throughout, stained glass features, gothic arched ceiling, Oamaru stone corbels and Bell Tower added in 1911. The slate-roofed brick and Oamaru stone Church sits on a prominent north facing corner section in North East Valley, it is listed on the district plan schedule of heritage buildings. It is also on the Heritage New Zealand register. Pews and other church furniture are included in the sale. Come along to the open homes and view this masterpiece for yourself.</p>\n', '224 north-3.jpg', 'https://leonamunro.co.nz/224 north-3.jpg', 1, 1, '', 0, 0, 0, 1, 0, 0, '224 north-3.jpg,224 north-6.jpg,224 north-18.jpg', '224 north-3.jpg,224 north-6.jpg,224 north-18.jpg', '2020-03-17 20:49:11', '', 'deadline', 1),
(69, '315a Highcliff Road, Highcliff', '315a-highcliff-road-highcliff', '<p>This immaculate, cosy semi-detached unit offers easy living at its best. A sunny conservatory leads to the open plan kitchen/dining/living with heat pump. This home offers two bedrooms with built-in wardrobes and a tidy bathroom. Single car garage with automatic door and access to a wonderful peaceful sunny garden. Tucked down a private driveway with additional off street parking for another vehicle. Close to buses and local amenities. This home would make a great investment, first home or downsize opportunity. I welcome your enquiry today.</p>\n', 'hires.26105-315ahighcliffrd-6.jpg', 'hires.26105-315ahighcliffrd-6.jpg', 2, 1, '', 0, 1, 0, 1, 0, 0, 'hires.15314-315ahighcliffrd-26.jpg,hires.26105-315ahighcliffrd-6.jpg,hires.28100-315ahighcliffrd-8.jpg,hires.28851-315ahighcliffrd-22.jpg', 'hires.15314-315ahighcliffrd-26.jpg,hires.26105-315ahighcliffrd-6.jpg,hires.28100-315ahighcliffrd-8.jpg,hires.28851-315ahighcliffrd-22.jpg', '2020-03-17 20:51:34', '', 'tender', 1),
(70, '1412 Taieri Mouth Road, Taieri Mouth', '1412-taieri-mouth-road-taieri-mouth', '<p>Sit back and take in the stunning ever-changing scenery of the Taieri River from this charming 3 bedroom hillside home or retreat. This striking property is packed with 1970&#39;s character and complimented by neutral tones and modern dcor throughout. It offers a modern kitchen with spacious open living/dining that opens to a stunning deck area situated for views and sun. There are 2 good sized double bedrooms on the main level and a third downstairs, all serviced by a large family bathroom. It is well insulated and heated by a wood fire. The home has 3 areas where you can relax and enjoy a coffee or wine while following the sun around the property and is further enhanced by a storage/workshop area, a large double garage and plenty of off street parking. Here is your chance to own your own very special slice of Taieri Mouth life, call me today to arrange a viewing.</p>\n', 'hires.16538-2.jpg', 'hires.16538-2.jpg', 3, 1, '', 0, 2, 0, 1, 0, 0, 'hires.3876-11.jpg,hires.11782-3.jpg,hires.16538-2.jpg,hires.31311-1.jpg', 'hires.3876-11.jpg,hires.11782-3.jpg,hires.16538-2.jpg,hires.31311-1.jpg', '2020-03-17 20:53:16', '', 'deadline', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_document`
--

CREATE TABLE `project_document` (
  `id` int(11) NOT NULL,
  `uniquename` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `docName` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_document`
--

INSERT INTO `project_document` (`id`, `uniquename`, `link`, `docName`, `description`) VALUES
(1, 'udyog-bhavan-23', '/admin/documents/pdf-sample (1).pdf', 'Udyog Bhavan_23 doc', 'Description for pdf'),
(2, 'grand-private-24', '/admin/documents/pdf-sample (1).pdf', 'Grand private_24 doc', 'Description for pdf'),
(5, '878-harington-dunedin', '/admin/documents/Edinburgh_Realty_2019-12-23.pdf', 'Test', 'Test'),
(12, '6-ballantyne-street-waverley', 'https://leonamunro.co.nz/admin/documents/sample.pdf', 'ghgh', 'hjhjh');

-- --------------------------------------------------------

--
-- Table structure for table `sessiondates`
--

CREATE TABLE `sessiondates` (
  `id` int(11) NOT NULL,
  `sessionDate` varchar(20) NOT NULL,
  `sessionFromtime` varchar(20) NOT NULL,
  `sessionTotime` varchar(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`) VALUES
(1, 'admin@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_document`
--
ALTER TABLE `project_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessiondates`
--
ALTER TABLE `sessiondates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `project_document`
--
ALTER TABLE `project_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sessiondates`
--
ALTER TABLE `sessiondates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
