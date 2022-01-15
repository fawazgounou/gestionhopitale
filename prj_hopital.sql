-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 27 Août 2020 à 11:33
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `prj_hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `hopital`
--

CREATE TABLE `hopital` (
  `idH` varchar(100) NOT NULL,
  `nomH` varchar(255) NOT NULL,
  `villeH` varchar(100) NOT NULL,
  `qtierH` varchar(100) DEFAULT NULL,
  `descriptH` text NOT NULL,
  `servicesH` text NOT NULL,
  `telH` int(11) NOT NULL,
  `sitewebH` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `img_url` varchar(255) NOT NULL DEFAULT 'neant',
  `mdpH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `hopital`
--

INSERT INTO `hopital` (`idH`, `nomH`, `villeH`, `qtierH`, `descriptH`, `servicesH`, `telH`, `sitewebH`, `mail`, `img_url`, `mdpH`) VALUES
('1245', 'vdvd', 'xxxx', 'ss', 'prepare(&quot;insert into hopital(idH, nomH, villeH, qtierH, descriptH, servicesH, telH, sitewebH, mail, img_url, mdpH) values(?,?,?,?,?,?,?,?,?,?,?)&quot;);\r\n						$req-&gt;execute(array($id, $nom, $ville, $quartier, $description, $service, $tel, $web, $email, $file_dest, $passe));\r\n						$erreur = &quot;Envoi de fichier rÃ©ussi !! &lt;br&gt; Compte crÃ©Ã© avec succÃ¨s.&quot;;\r\n					}else{\r\n						echo &quot;Une erreur est survenue lors de l''envoi du fichier&quot;;\r\n					}\r\n				}else{\r\n					echo &quot;Seul les fichiers images(png, PNG, svg, jpeg, JPEG, jpg, JPG ) sont autorisÃ©s&quot;;\r\n				}\r\n			}else{\r\n				//insertion sans images\r\n				$req = $db-&gt;prepare(&quot;insert into hopital(idH, nomH, villeH, qtierH, descriptH, servicesH, telH, sitewebH, mail, mdpH) values(?,?,?,?,?,?,?,?,?,?)&quot;);\r\n				$req-&gt;execute(array($id, $nom, $ville, $quartier, $description, $service, $tel, $web, $email, $passe));\r\n				$erreur = &quot; required&gt;', '&quot; required&gt;', 252525, 'sderzt', 'benben@gail.com', 'imagesHosp/1322.png', '9f6e6800cfae7749eb6c486619254b9c'),
('1245sjsjs', 'vdvd', 'xxxx', 'ss', ' Compte crÃ©Ã© avec succÃ¨s.&quot;;\r\n					}else{\r\n						echo &quot;Une erreur est survenue lors de l''envoi du fichier&quot;;\r\n					}\r\n				}else{\r\n					echo &quot;Seul les fichiers images(png, PNG, svg, jpeg, JPEG, jpg, JPG ) sont autorisÃ©s&quot;;\r\n				}\r\n			}else{\r\n				//insertion sans images\r\n				$req = $db-&gt;prepare(&quot;insert into hopital(idH, nomH, villeH, qtierH, descriptH, servicesH, telH, sitewebH, mail, mdpH) values(?,?,?,?,?,?,?,?,?,?)&quot;);\r\n				$req-&gt;execute(array($id, $nom, $ville, $quartier, $description, $service, $tel, $web, $email, $passe));\r\n				$erreur = &quot; required&gt;&quot; required&gt;&quot; required&gt;', '&quot; required&gt;', 252525, 'sderzt', 'bensdben@gail.com', 'neant', '9f6e6800cfae7749eb6c486619254b9c'),
('1245sjsjsss', 'vdvd', 'xxxx', 'ss', 'execute(array($id, $nom, $ville, $quartier, $description, $service, $tel, $web, $email, $passe));\r\n				$erreur = &quot; required&gt;&quot; required&gt;&quot; required&gt;&quot; required&gt;&quot; required&gt;', '&quot; required&gt;', 252525, 'sderzt', 'bensdbsen@gail.com', 'imagesHosp/1322.png', '9f6e6800cfae7749eb6c486619254b9c'),
('zzze', 'vdvd', 'xxxx', 'ss', 'qdxq', 'execute(array($id, $nom, $ville, $qtier, $description, $service, $tel, $sitewebH, $mail, $passe));\r\n				$erreur = &quot; Compte crÃ©Ã© avec succÃ¨s.&quot;;&quot; required&gt;', 252525, 'szz', 'benben@gail.com', '', '9f6e6800cfae7749eb6c486619254b9c'),
('zzze11', 'vdvd', 'xxxx', 'ss', 'sxjhbgj if(!empty($_FILES)){\r\n				$file_name = $_FILES[&quot;imag&quot;][&quot;name&quot;];\r\n				$file_extension = strrchr($file_name, &quot;.&quot;);\r\n\r\n				$file_tmp_name = $_FILES[&quot;imag&quot;][&quot;tmp_name&quot;];\r\n				$file_dest = ''imagesHosp/''.$file_name;\r\n\r\n				$extension_autorisees = array(''.png'' ,''.PNG'',''.jpg'', ''.JPG'',''.jpeg'', ''.JPEG'', ''.svg'', ''.SVG'');\r\n				if(!empty($file_name)){\r\n					if(in_array($file_extension, $extension_autorisees)){\r\n					if(move_uploaded_file($file_tmp_name, $file_dest)){  //on aurait pu vÃ©rifier que $_files[''fichier''][''eror'']==0\r\n//INSERT INTO `hopital`(`idH`, `nomH`, `villeH`, `qtierH`, `descriptH`, `servicesH`, `telH`, `sitewebH`, `mail`, `img_url`, `mdpH`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])\r\n						$req = $db-&gt;prepare(&quot;insert into hopital(idH, nomH, villeH, qtierH, descriptH, servicesH, telH, sitewebH, mail, img_url, mdpH) values(?,?,?,?,?,?,?,?,?,?,?)&quot;);\r\n						$req-&gt;execute(array($id, $nom, $ville, $quartier, $description, $service, $tel, $web, $email, $file_dest, $passe));\r\n						$erreur = &quot;Envoi de fichier rÃ©ussi !! &lt;br&gt; Compte crÃ©Ã© avec succÃ¨s.&quot;;\r\n					}else{\r\n						echo &quot;Une erreur est survenue lors de l''envoi du fichier&quot;;\r\n					}\r\n				}else{\r\n					echo &quot;Seul les fichiers images(png, PNG, svg, jpeg, JPEG, jpg, JPG ) sont autorisÃ©s&quot;;\r\n				}\r\n			}else{\r\n				//insertion sans images\r\n				$req = $db-&gt;prepare(&quot;insert into hopital(idH, nomH, villeH, qtierH, descriptH, servicesH, telH, sitewebH, mail, mdpH) values(?,?,?,?,?,?,?,?,?,?)&quot;);\r\n				$req-&gt;execute(array($id, $nom, $ville, $quartier, $description, $service, $tel, $web, $email, $passe));\r\n				$erreur = ', '&quot; required&gt;', 252525, 'sderzt', 'benben@gail.com', '', '9f6e6800cfae7749eb6c486619254b9c'),
('zzzz', 'vdvd', 'xxxx', '', 'Pour faire face à la complexité croissante des systèmes d’information, de nouvelles méthodes et outils ont été créées. La principale avancée des deux dernières décennies réside dans la programmation orientée objet (P.O.O.). Face à ce nouveau mode de programmation, les méthodes de modélisation classique (telle MERISE) ont rapidement montré certaines limites et ont dû s’adapter (cf. MERISE/2). De très nombreuses méthodes ont également vu le jour comme Booch, OMT … Dans ce contexte et devant le foisonnement de nouvelles méthodes de conception « orientée objet », l’Object Management Group (OMG) a eu comme objectif de définir une notation standard utilisable dans les développements informatiques basés sur l’objet. C’est ainsi qu’est apparu UML (Unified Modified Language « langage de modélisation objet unifié »), qui est issu de la fusion des méthodes Booch, ', 'qqa', 252525, 'szz', 'benben@gail.com', 'imagesHosp/DEV2.PNG', 'f3abb86bd34cf4d52698f14c0da1dc60');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `hopital`
--
ALTER TABLE `hopital`
  ADD PRIMARY KEY (`idH`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
