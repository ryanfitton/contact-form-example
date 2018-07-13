#Example contact form
This is an example contact form and can be used as a template.

* Version: 1.0.0
* Date: 2018/07/13
* Author: Ryan Fitton (ryan@ryanfitton.co.uk)

Features:
* PHP validation checks (empty, numeric, email address format)
* Cross Site Scripting prevention
* Sends email via the PHPMailer library (Installed with Composer: `composer install`)
* Records saved in a MySQL database


##Setup

1. Edit the `config.php` file to setup who the email is sent to, from and the subject.
2. Enter the database connection details in this file too.
3. Upload the this repository to your web server.
4. Create a new database with the same name as specified in the `config.php` file. To setup the correct tables, run an SQL command using the SQL statements below:

```
--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `enquiry` text NOT NULL,
  `ipaddress` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
```