-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2017 at 06:12 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinixeblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `postid`, `comment`) VALUES
(1, 1, 'موفقين إن شاء الله');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `image`) VALUES
(1, 'إنطلاق مدونة دنكس التقنية ', ' اليوم وبفضل الله يتم اطلاق مدونة دنكس هذه المدونة التي سوف تسعى لتطرق لمختلف المواضيع التقنية خاصة تطبيقات الهواتف الذكية و الأمن المعلوماتي و أساليب الحماية و ستكون هده المدونة الموجه التقني لكل مهووس بالتقنية .', 1509549122, 'CuPCmHAXEAAswqH.jpg'),
(2, 'تعرّف على الميّزات الجديدة في أندرويد أوريو 8.1', 'أطلقت شركة قوقل النسخة الأولى للمُطوّرين من نظام أندرويد أوريو 8.1 قدّمت من خلالها مجموعة من الميّزات الجديدة لمُستخدمي هواتف الشركة المُختلفة، الجيلين الأول والثاني من بيكسل، إضافة إلى أجهزة نيكسوس Nexus أيضًا.\r\n\r\nوحرصت قوقل بداية على تعديل البيضة الشهيرة التي تظهر عند الضغط أكثر من مرّة على رقم الإصدار في الإعدادات، ففي أندرويد 8.1 ستظهر كعكة أوريو Oreo للمرّة الأولى، وهذه عادة تواظب الشركة عليها في جميع نسخ أندرويد.\r\n\r\nأما التغييرات الحقيقية فبدأت من تعديل الواجهات لتُصبح أكثر تكاملًا فيما بينها، فشريط الانتقال في تطبيق الإعدادات مثلًا أصبح بلون موحّد مع العناصر الموجودة في النافذة ذاتها. وهو أمر كرّرته الشركة في مركز التحكّم الذي يظهر عند سحب الشاشة من الأعلى، فهو الآن بخلفية شبه شفّافة تسمح برؤية التطبيق الموجود خلفها. تعديلات توحيد المظهر لم تقتصر على ذلك، بل أن النظام بشكل كامل الآن يقوم بتغيير درجة اللون على حسب خلفية الشاشة بحيث لا يكون هناك فروقات بين لون الخلفية ولون واجهات النظام.\r\n\r\nوأضافت قوقل في أندرويد 8.1 قائمة جديدة للتحكّم بالجهاز بعد الضغط على زر التشغيل، وهي قائمة تظهر في جميع الأجهزة الآن بحيث يُمكن للمستخدم الاختيار بين إيقاف تشغيل الجهاز أو إعادة تشغيله.\r\n\r\nالبعض نوّه لوجود إمكانية عرض البيانات على شاشة القفل دون الحاجة لتشغيل الشاشة، وانتشر فيديو على الإنترنت يدّعي أنه مُصوّر من بيكسل 2016 يعمل بالإصدار التجريبي الجديد، إلا أن مُستخدمين آخرين أكّدوا عدم وجوده.\r\n\r\nتطبيق الإعدادات حصل بدوره على تعديلات أُخرى، فالشركة أضافت “الإيماءات” Gestures كقسم ظاهر للجميع وهذا لضبط ميّزات مثل الضغط على أطراف الجهاز أو لمس الحواف الجانبية للشاشة. كما أضافت خيار لعرض آخر التطبيقات التي تم فتحها حتى بعد إغلاقها بشكل كامل، وهذا كسجل لمراجعة التطبيقات مثل الموجود في الحواسب.\r\n\r\nأما مركز التنبيهات فهو سيعرض الآن التطبيقات التي تستهلك البطارية مع إمكانية الضغط عليها مُطوّلًا لإغلاقها بشكل كامل وإيقاف استنزاف الشحن.', 1509549334, 'android-8-1-dp1-power-menu1-768x449.png');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `content`, `image`, `link`) VALUES
(1, 'Chef In Hand', 'هو تطبيق تعليم للطبخ بالفيديو والصور التعليمية التي لن تزيد عن 90 ثانية , ويمكن إستخدام التطبيق بعدة لغات عالمية .', 'chefinhand.png', 'https://play.google.com/store/apps/details?id=com.chef.in.hand.app'),
(2, 'Map Mall', 'تطبيق خدماتي مجاني يتيح للمستخدم تصفح المراكز التجارية في مدينته والتنقل ضمن طوابقها ', 'mapmall.png', 'https://play.google.com/store/apps/details?id=com.app.mapmall'),
(3, 'شجرة عائلة القفاري', 'تفتخر دنكس بإطلاق موقع وتطبيقات شجرة القفاري على جوجل بلاي', 'qefari.png', 'https://play.google.com/store/apps/details?id=net.gefari.familytree');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
