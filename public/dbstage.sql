-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 31 mars 2023 à 18:53
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbstage`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'utilisateur.png',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `siren` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siren_formate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personne_morale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denomination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation_formate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise_cessee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_cessation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise_employeuse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_juridique` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forme_juridique` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effectif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effectif_min` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effectif_max` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tranche_effectif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annee_effectif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complement_adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_dirigeants_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_beneficiaires_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_documents_avec_mentions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_documents_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_publications_avec_mentions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_publications_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curseurSuivant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chiffre_affaires` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effectifs_finances` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annee_finances` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe` varchar(4000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `file`, `name`, `email`, `phone`, `siren`, `siren_formate`, `nom_entreprise`, `personne_morale`, `denomination`, `date_creation`, `date_creation_formate`, `entreprise_cessee`, `date_cessation`, `entreprise_employeuse`, `categorie_juridique`, `forme_juridique`, `effectif`, `effectif_min`, `effectif_max`, `tranche_effectif`, `annee_effectif`, `capital`, `complement_adresse`, `code_postal`, `ville`, `nb_dirigeants_total`, `nb_beneficiaires_total`, `nb_documents_avec_mentions`, `nb_documents_total`, `nb_publications_avec_mentions`, `nb_publications_total`, `total`, `page`, `curseurSuivant`, `chiffre_affaires`, `resultat`, `effectifs_finances`, `annee_finances`, `iframe`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1680004260b1.jpg', 'yassine assad', 'yassineassadd@gmail.com', 697887969, 'yassine siren', 'yassine', 'yassine nom_entreprise', 'yassine personne_morale', 'polrg', 'yassine', '30/11/2003', 'ba9i', 'no ba9i', 'yassine', 'lido', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yassine annee_finances', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6794.0543435323!2d-8.060947376603691!3d31.63310641014246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe94f764d1253%3A0xc16a2a71847d7a0a!2sMassira%20I%2C%20Marrakech%2040140!5e0!3m2!1sfr!2sma!4v1680004174473!5m2!1sfr!2sma', 1, '2023-03-28 09:51:01', '2023-03-28 09:51:01'),
(4, '1680091476b3.jpg', 'lkvf', 'yassine@gmail.com', 87654321654, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11058.032276841936!2d-8.05657!3d31.633097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafeeb10de85ec9%3A0x354d29c7ccb7fc0b!2sCoop%C3%A9rative%20le%20Bon%20Lait!5e1!3m2!1sfr!2sma!4v1680093854925!5m2!1sfr!2sma\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 3, '2023-03-29 10:04:36', '2023-03-29 10:45:00'),
(5, 'utilisateur.png', 'lksdlfklsd', 'yassine@gmail.com', 98765456, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11058.032276841936!2d-8.05657!3d31.633097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafeeb10de85ec9%3A0x354d29c7ccb7fc0b!2sCoop%C3%A9rative%20le%20Bon%20Lait!5e1!3m2!1sfr!2sma!4v1680093854925!5m2!1sfr!2sma\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 3, '2023-03-29 10:47:09', '2023-03-29 10:47:09'),
(6, 'utilisateur.png', 'jk', 'ieiteut@gmail.com', 8765434567, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ass', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '2023-03-30 10:36:07', '2023-03-30 10:36:07');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_03_08_154823_users', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_08_140940_create_companies_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'utilisateur.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `file`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yassine', 'yassine@gmail.com', NULL, '$2y$10$HptLNCLQKhNrtYiT5n4MO.lHTrZh6culFPzmoS3XnjhWYK1vweGC.', '1680005510utilisateur.png', NULL, '2023-03-28 09:45:58', '2023-03-28 10:11:51'),
(3, 'yassine', 'y@gmail.com', NULL, '$2y$10$Mvvu9/6IWbKsTYlfxwQV0uCj3c8Tc7TOa8eQieg0BOiUHoo1EPDaS', '1680087465utilisateur.png', NULL, '2023-03-29 08:57:46', '2023-03-29 08:57:46'),
(4, 'yass', 'ass@gmail.com', NULL, '$2y$10$aIL5Th7ea9f9LmVzNr0HqOnyNQ8fk5hIwUdGnMsJ4z0znp1AKEgXq', 'utilisateur.png', NULL, '2023-03-30 10:24:14', '2023-03-30 10:24:14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
