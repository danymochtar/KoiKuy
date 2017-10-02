-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 02 Okt 2017 pada 18.24
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koi_forum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Activity`
--

CREATE TABLE `GDN_Activity` (
  `ActivityID` int(11) NOT NULL,
  `ActivityTypeID` int(11) NOT NULL,
  `NotifyUserID` int(11) NOT NULL DEFAULT '0',
  `ActivityUserID` int(11) DEFAULT NULL,
  `RegardingUserID` int(11) DEFAULT NULL,
  `Photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HeadlineFormat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Story` text COLLATE utf8_unicode_ci,
  `Format` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RecordType` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RecordID` int(11) DEFAULT NULL,
  `InsertUserID` int(11) DEFAULT NULL,
  `DateInserted` datetime NOT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  `Notified` tinyint(4) NOT NULL DEFAULT '0',
  `Emailed` tinyint(4) NOT NULL DEFAULT '0',
  `Data` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_Activity`
--

INSERT INTO `GDN_Activity` (`ActivityID`, `ActivityTypeID`, `NotifyUserID`, `ActivityUserID`, `RegardingUserID`, `Photo`, `HeadlineFormat`, `Story`, `Format`, `Route`, `RecordType`, `RecordID`, `InsertUserID`, `DateInserted`, `InsertIPAddress`, `DateUpdated`, `Notified`, `Emailed`, `Data`) VALUES
(1, 17, -1, 3, NULL, NULL, '{ActivityUserID,You} joined.', 'Welcome Aboard!', NULL, NULL, NULL, NULL, NULL, '2017-09-30 11:58:26', '127.0.0.1', '2017-10-01 05:39:14', 0, 0, 'a:1:{s:15:"ActivityUserIDs";a:1:{i:0;i:2;}}'),
(2, 15, -1, 2, 1, NULL, '{RegardingUserID,you} &rarr; {ActivityUserID,you}', 'Ping! An activity post is a public way to talk at someone. When you update your status here, it posts it on your activity feed.', 'Html', NULL, NULL, NULL, 1, '2017-09-30 11:58:29', NULL, '2017-09-30 11:58:29', 0, 0, NULL),
(3, 17, -2, 2, 3, NULL, '{ActivityUserID,user} added an account for {RegardingUserID,user}.', NULL, NULL, NULL, NULL, NULL, 2, '2017-10-01 05:39:14', '127.0.0.1', '2017-10-01 05:39:14', 0, 0, 'a:0:{}'),
(4, 17, -1, 8, NULL, NULL, '{ActivityUserID,You} joined.', 'Welcome Aboard!', NULL, NULL, NULL, NULL, NULL, '2017-10-01 13:18:52', '127.0.0.1', '2017-10-01 13:28:03', 0, 0, 'a:1:{s:15:"ActivityUserIDs";a:4:{i:0;i:7;i:1;i:6;i:2;i:5;i:3;i:4;}}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_ActivityComment`
--

CREATE TABLE `GDN_ActivityComment` (
  `ActivityCommentID` int(11) NOT NULL,
  `ActivityID` int(11) NOT NULL,
  `Body` text COLLATE utf8_unicode_ci NOT NULL,
  `Format` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `InsertUserID` int(11) NOT NULL,
  `DateInserted` datetime NOT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_ActivityType`
--

CREATE TABLE `GDN_ActivityType` (
  `ActivityTypeID` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `AllowComments` tinyint(4) NOT NULL DEFAULT '0',
  `ShowIcon` tinyint(4) NOT NULL DEFAULT '0',
  `ProfileHeadline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FullHeadline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RouteCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Notify` tinyint(4) NOT NULL DEFAULT '0',
  `Public` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_ActivityType`
--

INSERT INTO `GDN_ActivityType` (`ActivityTypeID`, `Name`, `AllowComments`, `ShowIcon`, `ProfileHeadline`, `FullHeadline`, `RouteCode`, `Notify`, `Public`) VALUES
(1, 'SignIn', 0, 0, '%1$s signed in.', '%1$s signed in.', NULL, 0, 1),
(2, 'Join', 1, 0, '%1$s joined.', '%1$s joined.', NULL, 0, 1),
(3, 'JoinInvite', 1, 0, '%1$s accepted %4$s invitation for membership.', '%1$s accepted %4$s invitation for membership.', NULL, 0, 1),
(4, 'JoinApproved', 1, 0, '%1$s approved %4$s membership application.', '%1$s approved %4$s membership application.', NULL, 0, 1),
(5, 'JoinCreated', 1, 0, '%1$s created an account for %3$s.', '%1$s created an account for %3$s.', NULL, 0, 1),
(6, 'AboutUpdate', 1, 0, '%1$s updated %6$s profile.', '%1$s updated %6$s profile.', NULL, 0, 1),
(7, 'WallComment', 1, 1, '%1$s wrote:', '%1$s wrote on %4$s %5$s.', NULL, 0, 1),
(8, 'PictureChange', 1, 0, '%1$s changed %6$s profile picture.', '%1$s changed %6$s profile picture.', NULL, 0, 1),
(9, 'RoleChange', 1, 0, '%1$s changed %4$s permissions.', '%1$s changed %4$s permissions.', NULL, 1, 1),
(10, 'ActivityComment', 0, 1, '%1$s', '%1$s commented on %4$s %8$s.', 'activity', 1, 1),
(11, 'Import', 0, 0, '%1$s imported data.', '%1$s imported data.', NULL, 1, 0),
(12, 'Banned', 0, 0, '%1$s banned %3$s.', '%1$s banned %3$s.', NULL, 0, 1),
(13, 'Unbanned', 0, 0, '%1$s un-banned %3$s.', '%1$s un-banned %3$s.', NULL, 0, 1),
(14, 'Applicant', 0, 0, '%1$s applied for membership.', '%1$s applied for membership.', NULL, 1, 0),
(15, 'WallPost', 1, 1, '%3$s wrote:', '%3$s wrote on %2$s %5$s.', NULL, 0, 1),
(16, 'Default', 0, 0, NULL, NULL, NULL, 0, 1),
(17, 'Registration', 0, 0, NULL, NULL, NULL, 0, 1),
(18, 'Status', 0, 0, NULL, NULL, NULL, 0, 1),
(19, 'Ban', 0, 0, NULL, NULL, NULL, 0, 1),
(20, 'ConversationMessage', 0, 0, '%1$s sent you a %8$s.', '%1$s sent you a %8$s.', 'message', 1, 0),
(21, 'AddedToConversation', 0, 0, '%1$s added %3$s to a %8$s.', '%1$s added %3$s to a %8$s.', 'conversation', 1, 0),
(22, 'NewDiscussion', 0, 0, '%1$s started a %8$s.', '%1$s started a %8$s.', 'discussion', 0, 0),
(23, 'NewComment', 0, 0, '%1$s commented on a discussion.', '%1$s commented on a discussion.', 'discussion', 0, 0),
(24, 'DiscussionComment', 0, 0, '%1$s commented on %4$s %8$s.', '%1$s commented on %4$s %8$s.', 'discussion', 1, 0),
(25, 'DiscussionMention', 0, 0, '%1$s mentioned %3$s in a %8$s.', '%1$s mentioned %3$s in a %8$s.', 'discussion', 1, 0),
(26, 'CommentMention', 0, 0, '%1$s mentioned %3$s in a %8$s.', '%1$s mentioned %3$s in a %8$s.', 'comment', 1, 0),
(27, 'BookmarkComment', 0, 0, '%1$s commented on your %8$s.', '%1$s commented on your %8$s.', 'bookmarked discussion', 1, 0),
(28, 'Discussion', 0, 0, NULL, NULL, NULL, 0, 1),
(29, 'Comment', 0, 0, NULL, NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_AnalyticsLocal`
--

CREATE TABLE `GDN_AnalyticsLocal` (
  `TimeSlot` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Views` int(11) DEFAULT NULL,
  `EmbedViews` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_AnalyticsLocal`
--

INSERT INTO `GDN_AnalyticsLocal` (`TimeSlot`, `Views`, `EmbedViews`) VALUES
('20171001', 65, 0),
('20171002', 3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Attachment`
--

CREATE TABLE `GDN_Attachment` (
  `AttachmentID` int(11) NOT NULL,
  `Type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ForeignID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ForeignUserID` int(11) NOT NULL,
  `Source` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `SourceID` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `SourceURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Attributes` text COLLATE utf8_unicode_ci,
  `DateInserted` datetime NOT NULL,
  `InsertUserID` int(11) NOT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  `UpdateUserID` int(11) DEFAULT NULL,
  `UpdateIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Ban`
--

CREATE TABLE `GDN_Ban` (
  `BanID` int(11) NOT NULL,
  `BanType` enum('IPAddress','Name','Email') COLLATE utf8_unicode_ci NOT NULL,
  `BanValue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CountUsers` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CountBlockedRegistrations` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `InsertUserID` int(11) NOT NULL,
  `DateInserted` datetime NOT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UpdateUserID` int(11) DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  `UpdateIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Category`
--

CREATE TABLE `GDN_Category` (
  `CategoryID` int(11) NOT NULL,
  `ParentCategoryID` int(11) DEFAULT NULL,
  `TreeLeft` int(11) DEFAULT NULL,
  `TreeRight` int(11) DEFAULT NULL,
  `Depth` int(11) DEFAULT NULL,
  `CountDiscussions` int(11) NOT NULL DEFAULT '0',
  `CountComments` int(11) NOT NULL DEFAULT '0',
  `DateMarkedRead` datetime DEFAULT NULL,
  `AllowDiscussions` tinyint(4) NOT NULL DEFAULT '1',
  `Archived` tinyint(4) NOT NULL DEFAULT '0',
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `UrlCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sort` int(11) DEFAULT NULL,
  `CssClass` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermissionCategoryID` int(11) NOT NULL DEFAULT '-1',
  `PointsCategoryID` int(11) NOT NULL DEFAULT '0',
  `HideAllDiscussions` tinyint(4) NOT NULL DEFAULT '0',
  `DisplayAs` enum('Categories','Discussions','Heading','Default') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Default',
  `InsertUserID` int(11) NOT NULL,
  `UpdateUserID` int(11) DEFAULT NULL,
  `DateInserted` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  `LastCommentID` int(11) DEFAULT NULL,
  `LastDiscussionID` int(11) DEFAULT NULL,
  `LastDateInserted` datetime DEFAULT NULL,
  `AllowedDiscussionTypes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DefaultDiscussionType` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AllowFileUploads` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_Category`
--

INSERT INTO `GDN_Category` (`CategoryID`, `ParentCategoryID`, `TreeLeft`, `TreeRight`, `Depth`, `CountDiscussions`, `CountComments`, `DateMarkedRead`, `AllowDiscussions`, `Archived`, `Name`, `UrlCode`, `Description`, `Sort`, `CssClass`, `Photo`, `PermissionCategoryID`, `PointsCategoryID`, `HideAllDiscussions`, `DisplayAs`, `InsertUserID`, `UpdateUserID`, `DateInserted`, `DateUpdated`, `LastCommentID`, `LastDiscussionID`, `LastDateInserted`, `AllowedDiscussionTypes`, `DefaultDiscussionType`, `AllowFileUploads`) VALUES
(-1, NULL, 1, 4, NULL, 0, 0, NULL, 1, 0, 'Root', 'root', 'Root of category tree. Users should never see this.', NULL, NULL, NULL, -1, 0, 0, 'Default', 1, 1, '2017-09-30 11:58:28', '2017-09-30 11:58:28', NULL, NULL, NULL, NULL, NULL, 1),
(1, -1, 2, 3, 1, 1, 1, NULL, 1, 0, 'General', 'general', 'General discussions', NULL, NULL, NULL, -1, 0, 0, 'Default', 1, 1, '2017-09-30 11:58:28', '2017-09-30 11:58:28', 1, 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Comment`
--

CREATE TABLE `GDN_Comment` (
  `CommentID` int(11) NOT NULL,
  `DiscussionID` int(11) NOT NULL,
  `InsertUserID` int(11) DEFAULT NULL,
  `UpdateUserID` int(11) DEFAULT NULL,
  `DeleteUserID` int(11) DEFAULT NULL,
  `Body` text COLLATE utf8_unicode_ci NOT NULL,
  `Format` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateInserted` datetime DEFAULT NULL,
  `DateDeleted` datetime DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UpdateIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Flag` tinyint(4) NOT NULL DEFAULT '0',
  `Score` float DEFAULT NULL,
  `Attributes` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_Comment`
--

INSERT INTO `GDN_Comment` (`CommentID`, `DiscussionID`, `InsertUserID`, `UpdateUserID`, `DeleteUserID`, `Body`, `Format`, `DateInserted`, `DateDeleted`, `DateUpdated`, `InsertIPAddress`, `UpdateIPAddress`, `Flag`, `Score`, `Attributes`) VALUES
(1, 1, 1, NULL, NULL, 'This is the first comment on your site and it&rsquo;s an important one.\n\nDon&rsquo;t see your must-have feature? We keep Vanilla nice and simple by default. Use <b>addons</b> to get the special sauce your community needs.\n\nNot sure which addons to enable? Our favorites are Button Bar and Tagging. They&rsquo;re almost always a great start.', 'Html', '2017-09-30 11:58:29', NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Conversation`
--

CREATE TABLE `GDN_Conversation` (
  `ConversationID` int(11) NOT NULL,
  `Type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ForeignID` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Contributors` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FirstMessageID` int(11) DEFAULT NULL,
  `InsertUserID` int(11) NOT NULL,
  `DateInserted` datetime DEFAULT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UpdateUserID` int(11) NOT NULL,
  `DateUpdated` datetime NOT NULL,
  `UpdateIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CountMessages` int(11) NOT NULL DEFAULT '0',
  `CountParticipants` int(11) NOT NULL DEFAULT '0',
  `LastMessageID` int(11) DEFAULT NULL,
  `RegardingID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_ConversationMessage`
--

CREATE TABLE `GDN_ConversationMessage` (
  `MessageID` int(11) NOT NULL,
  `ConversationID` int(11) NOT NULL,
  `Body` text COLLATE utf8_unicode_ci NOT NULL,
  `Format` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `InsertUserID` int(11) DEFAULT NULL,
  `DateInserted` datetime NOT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Discussion`
--

CREATE TABLE `GDN_Discussion` (
  `DiscussionID` int(11) NOT NULL,
  `Type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ForeignID` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CategoryID` int(11) NOT NULL,
  `InsertUserID` int(11) NOT NULL,
  `UpdateUserID` int(11) DEFAULT NULL,
  `FirstCommentID` int(11) DEFAULT NULL,
  `LastCommentID` int(11) DEFAULT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Body` text COLLATE utf8_unicode_ci NOT NULL,
  `Format` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tags` text COLLATE utf8_unicode_ci,
  `CountComments` int(11) NOT NULL DEFAULT '0',
  `CountBookmarks` int(11) DEFAULT NULL,
  `CountViews` int(11) NOT NULL DEFAULT '1',
  `Closed` tinyint(4) NOT NULL DEFAULT '0',
  `Announce` tinyint(4) NOT NULL DEFAULT '0',
  `Sink` tinyint(4) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UpdateIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateLastComment` datetime DEFAULT NULL,
  `LastCommentUserID` int(11) DEFAULT NULL,
  `Score` float DEFAULT NULL,
  `Attributes` text COLLATE utf8_unicode_ci,
  `RegardingID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_Discussion`
--

INSERT INTO `GDN_Discussion` (`DiscussionID`, `Type`, `ForeignID`, `CategoryID`, `InsertUserID`, `UpdateUserID`, `FirstCommentID`, `LastCommentID`, `Name`, `Body`, `Format`, `Tags`, `CountComments`, `CountBookmarks`, `CountViews`, `Closed`, `Announce`, `Sink`, `DateInserted`, `DateUpdated`, `InsertIPAddress`, `UpdateIPAddress`, `DateLastComment`, `LastCommentUserID`, `Score`, `Attributes`, `RegardingID`) VALUES
(1, NULL, 'stub', 1, 1, NULL, NULL, 1, 'BAM! You&rsquo;ve got a sweet forum', 'There&rsquo;s nothing sweeter than a fresh new forum, ready to welcome your community. A Vanilla Forum has all the bits and pieces you need to build an awesome discussion platform customized to your needs. Here&rsquo;s a few tips:\n<ul>\n   <li>Use the <a href="/dashboard/settings/gettingstarted">Getting Started</a> list in the Dashboard to configure your site.</li>\n   <li>Don&rsquo;t use too many categories. We recommend 3-8. Keep it simple!</li>\n   <li>&ldquo;Announce&rdquo; a discussion (click the gear) to stick to the top of the list, and &ldquo;Close&rdquo; it to stop further comments.</li>\n   <li>Use &ldquo;Sink&rdquo; to take attention away from a discussion. New comments will no longer bring it back to the top of the list.</li>\n   <li>Bookmark a discussion (click the star) to get notifications for new comments. You can edit notification settings from your profile.</li>\n</ul>\nGo ahead and edit or delete this discussion, then spread the word to get this place cooking. Cheers!', 'Html', NULL, 1, NULL, 1, 0, 0, 0, '2017-09-30 11:58:29', NULL, NULL, NULL, '2017-09-30 11:58:29', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Draft`
--

CREATE TABLE `GDN_Draft` (
  `DraftID` int(11) NOT NULL,
  `DiscussionID` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `InsertUserID` int(11) NOT NULL,
  `UpdateUserID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Closed` tinyint(4) NOT NULL DEFAULT '0',
  `Announce` tinyint(4) NOT NULL DEFAULT '0',
  `Sink` tinyint(4) NOT NULL DEFAULT '0',
  `Body` text COLLATE utf8_unicode_ci NOT NULL,
  `Format` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateInserted` datetime NOT NULL,
  `DateUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Flag`
--

CREATE TABLE `GDN_Flag` (
  `DiscussionID` int(11) DEFAULT NULL,
  `InsertUserID` int(11) NOT NULL,
  `InsertName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `AuthorID` int(11) NOT NULL,
  `AuthorName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ForeignURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ForeignID` int(11) NOT NULL,
  `ForeignType` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Comment` text COLLATE utf8_unicode_ci NOT NULL,
  `DateInserted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Invitation`
--

CREATE TABLE `GDN_Invitation` (
  `InvitationID` int(11) NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RoleIDs` text COLLATE utf8_unicode_ci,
  `Code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `InsertUserID` int(11) DEFAULT NULL,
  `DateInserted` datetime NOT NULL,
  `AcceptedUserID` int(11) DEFAULT NULL,
  `DateExpires` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Log`
--

CREATE TABLE `GDN_Log` (
  `LogID` int(11) NOT NULL,
  `Operation` enum('Delete','Edit','Spam','Moderate','Pending','Ban','Error') COLLATE utf8_unicode_ci NOT NULL,
  `RecordType` enum('Discussion','Comment','User','Registration','Activity','ActivityComment','Configuration','Group') COLLATE utf8_unicode_ci NOT NULL,
  `TransactionLogID` int(11) DEFAULT NULL,
  `RecordID` int(11) DEFAULT NULL,
  `RecordUserID` int(11) DEFAULT NULL,
  `RecordDate` datetime NOT NULL,
  `RecordIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `InsertUserID` int(11) NOT NULL,
  `DateInserted` datetime NOT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OtherUserIDs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  `ParentRecordID` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `Data` mediumtext COLLATE utf8_unicode_ci,
  `CountGroup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_Log`
--

INSERT INTO `GDN_Log` (`LogID`, `Operation`, `RecordType`, `TransactionLogID`, `RecordID`, `RecordUserID`, `RecordDate`, `RecordIPAddress`, `InsertUserID`, `DateInserted`, `InsertIPAddress`, `OtherUserIDs`, `DateUpdated`, `ParentRecordID`, `CategoryID`, `Data`, `CountGroup`) VALUES
(1, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-09-30 11:58:29', NULL, 2, '2017-09-30 11:58:29', '127.0.0.1', '', NULL, NULL, NULL, 'a:1:{s:4:"_New";a:7:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:10:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:1:{s:7:"Version";s:5:"2.3.1";}}}', NULL),
(2, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-09-30 11:58:32', NULL, 2, '2017-09-30 11:58:32', '127.0.0.1', '', NULL, NULL, NULL, 'a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:10:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:1:{s:7:"Version";s:5:"2.3.1";}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:10:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:1:{s:9:"Dashboard";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:1:{s:7:"Version";s:5:"2.3.1";}}}', NULL),
(3, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-09-30 12:28:06', NULL, 2, '2017-09-30 12:28:06', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:10:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:1:{s:9:"Dashboard";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:1:{s:7:"Version";s:5:"2.3.1";}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:11:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:1:{s:9:"Dashboard";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:1:{s:7:"Version";s:5:"2.3.1";}}}', NULL),
(4, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-09-30 12:37:31', NULL, 2, '2017-09-30 12:37:31', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:11:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:1:{s:9:"Dashboard";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:1:{s:7:"Version";s:5:"2.3.1";}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:11:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:1:{s:7:"Version";s:5:"2.3.1";}}}', NULL),
(5, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-09-30 12:54:52', NULL, 2, '2017-09-30 12:54:52', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:11:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:1:{s:7:"Version";s:5:"2.3.1";}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:12:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:6:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:1:{s:7:"PerPage";s:2:"30";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}}}}', NULL),
(6, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:43:37', NULL, 2, '2017-10-01 05:43:37', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:12:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";s:11:"discussions";}s:7:"Vanilla";a:6:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:1:{s:7:"PerPage";s:2:"30";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:12:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(7, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:43:50', NULL, 2, '2017-10-01 05:43:50', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:12:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(8, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:44:10', NULL, 2, '2017-10-01 05:44:10', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:2:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:3:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(9, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:44:13', NULL, 2, '2017-10-01 05:44:13', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:3:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(10, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:45:11', NULL, 2, '2017-10-01 05:45:11', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:1:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:1:{s:12:"ConfirmEmail";b:1;}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(11, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:53:34', NULL, 2, '2017-10-01 05:53:34', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:2:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(12, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:56:47', NULL, 2, '2017-10-01 05:56:47', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:13:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:8:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:14:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:2:"en";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(13, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:57:10', NULL, 2, '2017-10-01 05:57:10', '127.0.0.1', '', NULL, NULL, NULL, 'a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:14:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:2:"en";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:14:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:2:"en";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(14, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 05:57:18', NULL, 2, '2017-10-01 05:57:18', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:14:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:2:"en";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:14:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(15, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 10:36:42', NULL, 2, '2017-10-01 10:36:42', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:14:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:15:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(16, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 10:37:09', NULL, 2, '2017-10-01 10:37:09', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:4:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;}s:6:"Garden";a:15:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:5:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;}s:6:"Garden";a:15:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL);
INSERT INTO `GDN_Log` (`LogID`, `Operation`, `RecordType`, `TransactionLogID`, `RecordID`, `RecordUserID`, `RecordDate`, `RecordIPAddress`, `InsertUserID`, `DateInserted`, `InsertIPAddress`, `OtherUserIDs`, `DateUpdated`, `ParentRecordID`, `CategoryID`, `Data`, `CountGroup`) VALUES
(17, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 10:37:20', NULL, 2, '2017-10-01 10:37:20', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:5:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;}s:6:"Garden";a:15:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:6:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;}s:6:"Garden";a:15:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(18, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 10:37:26', NULL, 2, '2017-10-01 10:37:26', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:6:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;}s:6:"Garden";a:15:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";}s:7:"Plugins";a:2:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:10:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;}s:6:"Garden";a:17:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(19, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 10:37:26', NULL, 2, '2017-10-01 10:37:26', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:10:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;}s:6:"Garden";a:17:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:11:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;}s:6:"Garden";a:17:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(20, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 10:37:30', NULL, 2, '2017-10-01 10:37:30', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:11:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;}s:6:"Garden";a:17:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:12:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;s:13:"EmojiExtender";b:1;}s:6:"Garden";a:17:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(21, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 12:03:07', NULL, 2, '2017-10-01 12:03:07', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:12:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;s:13:"EmojiExtender";b:1;}s:6:"Garden";a:17:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:12:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;s:13:"EmojiExtender";b:1;}s:6:"Garden";a:18:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;s:9:"Analytics";a:1:{s:10:"AllowLocal";b:1;}}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(22, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 12:03:12', NULL, 2, '2017-10-01 12:03:12', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:12:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;s:13:"EmojiExtender";b:1;}s:6:"Garden";a:18:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;s:9:"Analytics";a:1:{s:10:"AllowLocal";b:1;}}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:12:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;s:13:"EmojiExtender";b:1;}s:6:"Garden";a:20:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;s:9:"Analytics";a:1:{s:10:"AllowLocal";b:1;}s:14:"InstallationID";s:22:"DB64-EC1E2CA8-4D3DD647";s:18:"InstallationSecret";s:40:"64201ca143bc9f726d84ccbb71d58c83ae4d904b";}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL),
(23, 'Edit', 'Configuration', NULL, NULL, NULL, '2017-10-01 12:03:12', NULL, 2, '2017-10-01 12:03:12', '127.0.0.1', '', NULL, NULL, NULL, 'a:10:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:12:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;s:13:"EmojiExtender";b:1;}s:6:"Garden";a:18:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;s:9:"Analytics";a:1:{s:10:"AllowLocal";b:1;}}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}s:4:"_New";a:9:{s:13:"Conversations";a:1:{s:7:"Version";s:5:"2.3.1";}s:8:"Database";a:4:{s:4:"Name";s:9:"koi_forum";s:4:"Host";s:9:"localhost";s:4:"User";s:4:"root";s:8:"Password";s:0:"";}s:19:"EnabledApplications";a:2:{s:13:"Conversations";s:13:"conversations";s:7:"Vanilla";s:7:"vanilla";}s:14:"EnabledLocales";a:1:{s:9:"indonesia";s:5:"id_ID";}s:14:"EnabledPlugins";a:12:{s:14:"GettingStarted";s:14:"GettingStarted";s:8:"HtmLawed";s:8:"HtmLawed";s:7:"Twitter";b:1;s:8:"Facebook";b:1;s:8:"Flagging";b:1;s:12:"VanillaStats";b:1;s:8:"cleditor";b:0;s:9:"ButtonBar";b:0;s:7:"Emotify";b:0;s:10:"FileUpload";b:0;s:6:"editor";b:1;s:13:"EmojiExtender";b:1;}s:6:"Garden";a:20:{s:5:"Title";s:9:"Koi Forum";s:6:"Cookie";a:2:{s:4:"Salt";s:16:"JSUjdIrZ6duBRJ6v";s:6:"Domain";s:0:"";}s:12:"Registration";a:2:{s:12:"ConfirmEmail";b:1;s:6:"Method";s:5:"Basic";}s:5:"Email";a:2:{s:11:"SupportName";s:9:"Koi Forum";s:6:"Format";s:4:"text";}s:12:"SystemUserID";s:1:"1";s:14:"InputFormatter";s:8:"Markdown";s:7:"Version";s:5:"2.3.1";s:4:"Cdns";a:1:{s:7:"Disable";b:0;}s:16:"CanProcessImages";b:1;s:9:"Installed";b:1;s:5:"Theme";s:11:"bittersweet";s:18:"EditContentTimeout";s:4:"3600";s:5:"Embed";a:1:{s:5:"Allow";b:1;}s:6:"Locale";s:5:"id_ID";s:13:"DefaultAvatar";s:30:"defaultavatar/F2NNEUQ7WB88.jpg";s:20:"MobileInputFormatter";s:6:"TextEx";s:16:"AllowFileUploads";b:1;s:9:"Analytics";a:1:{s:10:"AllowLocal";b:1;}s:14:"InstallationID";s:22:"DB64-EC1E2CA8-4D3DD647";s:18:"InstallationSecret";s:40:"64201ca143bc9f726d84ccbb71d58c83ae4d904b";}s:7:"Plugins";a:3:{s:14:"GettingStarted";a:3:{s:9:"Dashboard";s:1:"1";s:7:"Plugins";s:1:"1";s:10:"Categories";s:1:"1";}s:7:"Twitter";a:5:{s:11:"ConsumerKey";s:25:"dQFpb8Q1QINPAcgPe62L9kd5r";s:6:"Secret";s:50:"Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG";s:12:"SocialSignIn";b:0;s:15:"SocialReactions";s:1:"1";s:13:"SocialSharing";b:0;}s:6:"editor";a:1:{s:12:"ForceWysiwyg";b:0;}}s:6:"Routes";a:1:{s:17:"DefaultController";a:2:{i:0;s:10:"categories";i:1;s:8:"Internal";}}s:7:"Vanilla";a:7:{s:7:"Version";s:5:"2.3.1";s:11:"Discussions";a:2:{s:7:"PerPage";s:2:"30";s:6:"Layout";s:6:"modern";}s:8:"Comments";a:2:{s:11:"AutoRefresh";N;s:7:"PerPage";s:2:"30";}s:7:"Archive";a:2:{s:4:"Date";s:0:"";s:7:"Exclude";b:0;}s:7:"Comment";a:2:{s:9:"MaxLength";s:4:"8000";s:9:"MinLength";s:2:"15";}s:15:"AdminCheckboxes";a:1:{s:3:"Use";b:0;}s:10:"Categories";a:1:{s:6:"Layout";s:6:"modern";}}}}', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Media`
--

CREATE TABLE `GDN_Media` (
  `MediaID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Size` int(11) NOT NULL,
  `InsertUserID` int(11) NOT NULL,
  `DateInserted` datetime NOT NULL,
  `ForeignID` int(11) DEFAULT NULL,
  `ForeignTable` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ImageWidth` smallint(5) UNSIGNED DEFAULT NULL,
  `ImageHeight` smallint(5) UNSIGNED DEFAULT NULL,
  `ThumbWidth` smallint(5) UNSIGNED DEFAULT NULL,
  `ThumbHeight` smallint(5) UNSIGNED DEFAULT NULL,
  `ThumbPath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Message`
--

CREATE TABLE `GDN_Message` (
  `MessageID` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Format` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AllowDismiss` tinyint(4) NOT NULL DEFAULT '1',
  `Enabled` tinyint(4) NOT NULL DEFAULT '1',
  `Application` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Controller` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `IncludeSubcategories` tinyint(4) NOT NULL DEFAULT '0',
  `AssetTarget` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CssClass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Permission`
--

CREATE TABLE `GDN_Permission` (
  `PermissionID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL DEFAULT '0',
  `JunctionTable` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `JunctionColumn` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `JunctionID` int(11) DEFAULT NULL,
  `Garden.Email.View` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Settings.Manage` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Settings.View` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.SignIn.Allow` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Users.Add` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Users.Edit` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Users.Delete` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Users.Approve` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Activity.Delete` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Activity.View` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Profiles.View` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Profiles.Edit` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Curation.Manage` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Moderation.Manage` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.PersonalInfo.View` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.AdvancedNotifications.Allow` tinyint(4) NOT NULL DEFAULT '0',
  `Garden.Community.Manage` tinyint(4) NOT NULL DEFAULT '0',
  `Conversations.Moderation.Manage` tinyint(4) NOT NULL DEFAULT '0',
  `Conversations.Conversations.Add` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Approval.Require` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Comments.Me` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Discussions.View` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Discussions.Add` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Discussions.Edit` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Discussions.Announce` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Discussions.Sink` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Discussions.Close` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Discussions.Delete` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Comments.Add` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Comments.Edit` tinyint(4) NOT NULL DEFAULT '0',
  `Vanilla.Comments.Delete` tinyint(4) NOT NULL DEFAULT '0',
  `Plugins.Flagging.Notify` tinyint(4) NOT NULL DEFAULT '0',
  `Plugins.Attachments.Upload.Allow` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_Permission`
--

INSERT INTO `GDN_Permission` (`PermissionID`, `RoleID`, `JunctionTable`, `JunctionColumn`, `JunctionID`, `Garden.Email.View`, `Garden.Settings.Manage`, `Garden.Settings.View`, `Garden.SignIn.Allow`, `Garden.Users.Add`, `Garden.Users.Edit`, `Garden.Users.Delete`, `Garden.Users.Approve`, `Garden.Activity.Delete`, `Garden.Activity.View`, `Garden.Profiles.View`, `Garden.Profiles.Edit`, `Garden.Curation.Manage`, `Garden.Moderation.Manage`, `Garden.PersonalInfo.View`, `Garden.AdvancedNotifications.Allow`, `Garden.Community.Manage`, `Conversations.Moderation.Manage`, `Conversations.Conversations.Add`, `Vanilla.Approval.Require`, `Vanilla.Comments.Me`, `Vanilla.Discussions.View`, `Vanilla.Discussions.Add`, `Vanilla.Discussions.Edit`, `Vanilla.Discussions.Announce`, `Vanilla.Discussions.Sink`, `Vanilla.Discussions.Close`, `Vanilla.Discussions.Delete`, `Vanilla.Comments.Add`, `Vanilla.Comments.Edit`, `Vanilla.Comments.Delete`, `Plugins.Flagging.Notify`, `Plugins.Attachments.Upload.Allow`) VALUES
(1, 0, NULL, NULL, NULL, 3, 2, 2, 3, 2, 2, 2, 2, 2, 3, 3, 3, 2, 2, 2, 2, 2, 2, 3, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 3),
(2, 0, 'Category', 'PermissionCategoryID', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 2, 2, 2, 2, 2, 3, 2, 2, 0, 0),
(3, 2, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 2, 'Category', 'PermissionCategoryID', -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 3, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 3, 'Category', 'PermissionCategoryID', -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 4, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 4, 'Category', 'PermissionCategoryID', -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 8, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1),
(10, 8, 'Category', 'PermissionCategoryID', -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(11, 32, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(12, 32, 'Category', 'PermissionCategoryID', -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0),
(13, 16, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(14, 16, 'Category', 'PermissionCategoryID', -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Regarding`
--

CREATE TABLE `GDN_Regarding` (
  `RegardingID` int(11) NOT NULL,
  `Type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `InsertUserID` int(11) NOT NULL,
  `DateInserted` datetime NOT NULL,
  `ForeignType` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `ForeignID` int(11) NOT NULL,
  `OriginalContent` text COLLATE utf8_unicode_ci,
  `ParentType` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ParentID` int(11) DEFAULT NULL,
  `ForeignURL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Comment` text COLLATE utf8_unicode_ci NOT NULL,
  `Reports` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Role`
--

CREATE TABLE `GDN_Role` (
  `RoleID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` enum('guest','unconfirmed','applicant','member','moderator','administrator') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sort` int(11) DEFAULT NULL,
  `Deletable` tinyint(4) NOT NULL DEFAULT '1',
  `CanSession` tinyint(4) NOT NULL DEFAULT '1',
  `PersonalInfo` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_Role`
--

INSERT INTO `GDN_Role` (`RoleID`, `Name`, `Description`, `Type`, `Sort`, `Deletable`, `CanSession`, `PersonalInfo`) VALUES
(2, 'Guest', 'Guests can only view content. Anyone browsing the site who is not signed in is considered to be a "Guest".', 'guest', 1, 0, 0, 0),
(3, 'Unconfirmed', 'Users must confirm their emails before becoming full members. They get assigned to this role.', 'unconfirmed', 2, 0, 1, 0),
(4, 'Applicant', 'Users who have applied for membership, but have not yet been accepted. They have the same permissions as guests.', 'applicant', 3, 0, 1, 0),
(8, 'Member', 'Members can participate in discussions.', 'member', 4, 1, 1, 0),
(16, 'Administrator', 'Administrators have permission to do anything.', 'administrator', 6, 1, 1, 0),
(32, 'Moderator', 'Moderators have permission to edit most content.', 'moderator', 5, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Session`
--

CREATE TABLE `GDN_Session` (
  `SessionID` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  `TransientKey` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Attributes` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Spammer`
--

CREATE TABLE `GDN_Spammer` (
  `UserID` int(11) NOT NULL,
  `CountSpam` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `CountDeletedSpam` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_Tag`
--

CREATE TABLE `GDN_Tag` (
  `TagID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ParentTagID` int(11) DEFAULT NULL,
  `InsertUserID` int(11) DEFAULT NULL,
  `DateInserted` datetime NOT NULL,
  `CategoryID` int(11) NOT NULL DEFAULT '-1',
  `CountDiscussions` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_TagDiscussion`
--

CREATE TABLE `GDN_TagDiscussion` (
  `TagID` int(11) NOT NULL,
  `DiscussionID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `DateInserted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_User`
--

CREATE TABLE `GDN_User` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varbinary(100) NOT NULL,
  `HashMethod` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `About` text COLLATE utf8_unicode_ci,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ShowEmail` tinyint(4) NOT NULL DEFAULT '0',
  `Gender` enum('u','m','f') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'u',
  `CountVisits` int(11) NOT NULL DEFAULT '0',
  `CountInvitations` int(11) NOT NULL DEFAULT '0',
  `CountNotifications` int(11) DEFAULT NULL,
  `InviteUserID` int(11) DEFAULT NULL,
  `DiscoveryText` text COLLATE utf8_unicode_ci,
  `Preferences` text COLLATE utf8_unicode_ci,
  `Permissions` text COLLATE utf8_unicode_ci,
  `Attributes` text COLLATE utf8_unicode_ci,
  `DateSetInvitations` datetime DEFAULT NULL,
  `DateOfBirth` datetime DEFAULT NULL,
  `DateFirstVisit` datetime DEFAULT NULL,
  `DateLastActive` datetime DEFAULT NULL,
  `LastIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AllIPAddresses` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateInserted` datetime NOT NULL,
  `InsertIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  `UpdateIPAddress` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HourOffset` int(11) NOT NULL DEFAULT '0',
  `Score` float DEFAULT NULL,
  `Admin` tinyint(4) NOT NULL DEFAULT '0',
  `Confirmed` tinyint(4) NOT NULL DEFAULT '1',
  `Verified` tinyint(4) NOT NULL DEFAULT '0',
  `Banned` tinyint(4) NOT NULL DEFAULT '0',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  `Points` int(11) NOT NULL DEFAULT '0',
  `CountUnreadConversations` int(11) DEFAULT NULL,
  `CountDiscussions` int(11) DEFAULT NULL,
  `CountUnreadDiscussions` int(11) DEFAULT NULL,
  `CountComments` int(11) DEFAULT NULL,
  `CountDrafts` int(11) DEFAULT NULL,
  `CountBookmarks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_User`
--

INSERT INTO `GDN_User` (`UserID`, `Name`, `Password`, `HashMethod`, `Photo`, `Title`, `Location`, `About`, `Email`, `ShowEmail`, `Gender`, `CountVisits`, `CountInvitations`, `CountNotifications`, `InviteUserID`, `DiscoveryText`, `Preferences`, `Permissions`, `Attributes`, `DateSetInvitations`, `DateOfBirth`, `DateFirstVisit`, `DateLastActive`, `LastIPAddress`, `AllIPAddresses`, `DateInserted`, `InsertIPAddress`, `DateUpdated`, `UpdateIPAddress`, `HourOffset`, `Score`, `Admin`, `Confirmed`, `Verified`, `Banned`, `Deleted`, `Points`, `CountUnreadConversations`, `CountDiscussions`, `CountUnreadDiscussions`, `CountComments`, `CountDrafts`, `CountBookmarks`) VALUES
(1, 'System', 0x3630504d524a4358444659595851433044493047, 'Random', 'http://localhost/tanya_koi/applications/dashboard/design/images/usericon.png', NULL, NULL, NULL, 'system@example.com', 0, 'u', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-30 11:58:25', NULL, NULL, NULL, 0, NULL, 2, 1, 0, 0, 0, 0, NULL, 1, NULL, 1, NULL, NULL),
(2, 'admin', 0x2432612430382439684e6a7655534b466e6a776d674457562f6967784f534c49527965736e6f53473246702f4a6b46794f78737335536471376f4679, 'Vanilla', NULL, NULL, NULL, NULL, 'jibril.hartri.putra@gmail.com', 0, 'u', 4, 0, NULL, NULL, NULL, 'a:2:{s:16:"PreviewThemeName";s:0:"";s:18:"PreviewThemeFolder";s:0:"";}', 'a:39:{i:0;s:17:"Garden.Email.View";i:1;s:22:"Garden.Settings.Manage";i:2;s:20:"Garden.Settings.View";i:3;s:19:"Garden.SignIn.Allow";i:4;s:16:"Garden.Users.Add";i:5;s:17:"Garden.Users.Edit";i:6;s:19:"Garden.Users.Delete";i:7;s:20:"Garden.Users.Approve";i:8;s:22:"Garden.Activity.Delete";i:9;s:20:"Garden.Activity.View";i:10;s:20:"Garden.Profiles.View";i:11;s:20:"Garden.Profiles.Edit";i:12;s:22:"Garden.Curation.Manage";i:13;s:24:"Garden.Moderation.Manage";i:14;s:24:"Garden.PersonalInfo.View";i:15;s:34:"Garden.AdvancedNotifications.Allow";i:16;s:23:"Garden.Community.Manage";i:17;s:31:"Conversations.Conversations.Add";i:18;s:24:"Vanilla.Discussions.View";i:19;s:23:"Vanilla.Discussions.Add";i:20;s:24:"Vanilla.Discussions.Edit";i:21;s:28:"Vanilla.Discussions.Announce";i:22;s:24:"Vanilla.Discussions.Sink";i:23;s:25:"Vanilla.Discussions.Close";i:24;s:26:"Vanilla.Discussions.Delete";i:25;s:20:"Vanilla.Comments.Add";i:26;s:21:"Vanilla.Comments.Edit";i:27;s:23:"Vanilla.Comments.Delete";i:28;s:32:"Plugins.Attachments.Upload.Allow";s:24:"Vanilla.Discussions.View";a:1:{i:0;i:-1;}s:23:"Vanilla.Discussions.Add";a:1:{i:0;i:-1;}s:24:"Vanilla.Discussions.Edit";a:1:{i:0;i:-1;}s:28:"Vanilla.Discussions.Announce";a:1:{i:0;i:-1;}s:24:"Vanilla.Discussions.Sink";a:1:{i:0;i:-1;}s:25:"Vanilla.Discussions.Close";a:1:{i:0;i:-1;}s:26:"Vanilla.Discussions.Delete";a:1:{i:0;i:-1;}s:20:"Vanilla.Comments.Add";a:1:{i:0;i:-1;}s:21:"Vanilla.Comments.Edit";a:1:{i:0;i:-1;}s:23:"Vanilla.Comments.Delete";a:1:{i:0;i:-1;}}', 'a:3:{s:12:"TransientKey";s:16:"nSg9FlUFXGinC2Gb";s:16:"LastLoginAttempt";i:1506864373;s:9:"LoginRate";i:1;}', NULL, '1975-09-16 00:00:00', '2017-09-30 11:58:26', '2017-10-01 13:23:52', '127.0.0.1', '127.0.0.1', '2017-09-30 11:58:26', '127.0.0.1', '2017-09-30 11:58:26', NULL, 7, NULL, 1, 1, 0, 0, 0, 0, NULL, 0, NULL, 0, NULL, NULL),
(3, 'jibrilhp', 0x24326124303824554a5662374e55492f3548756a664548367a6533494f55515870733775683947487474652e4e554648733752567833304c77374947, 'Vanilla', NULL, NULL, NULL, NULL, 'jibrilhp@student.gunadarma.ac.id', 0, 'u', 0, 0, NULL, NULL, NULL, NULL, 'a:13:{i:0;s:17:"Garden.Email.View";i:1;s:19:"Garden.SignIn.Allow";i:2;s:20:"Garden.Activity.View";i:3;s:20:"Garden.Profiles.View";i:4;s:20:"Garden.Profiles.Edit";i:5;s:31:"Conversations.Conversations.Add";i:6;s:24:"Vanilla.Discussions.View";i:7;s:23:"Vanilla.Discussions.Add";i:8;s:20:"Vanilla.Comments.Add";i:9;s:32:"Plugins.Attachments.Upload.Allow";s:24:"Vanilla.Discussions.View";a:1:{i:0;i:-1;}s:23:"Vanilla.Discussions.Add";a:1:{i:0;i:-1;}s:20:"Vanilla.Comments.Add";a:1:{i:0;i:-1;}}', NULL, NULL, NULL, '2017-10-01 05:39:13', '2017-10-01 05:39:13', '127.0.0.1', NULL, '2017-10-01 05:39:13', '127.0.0.1', NULL, NULL, 0, NULL, 0, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '[Deleted User]', 0x4f443356575a4949424b, 'Vanilla', NULL, NULL, NULL, '', 'user_5@deleted.email', 0, 'u', 0, 0, 0, NULL, '', NULL, '', 'a:1:{s:5:"State";s:7:"Deleted";}', NULL, NULL, '2017-10-01 13:22:07', '2017-10-01 13:22:07', '127.0.0.1', '127.0.0.1', '2017-10-01 13:22:07', '127.0.0.1', '2017-10-01 13:24:17', NULL, 0, NULL, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(6, '[Deleted User]', 0x3133453057334b4e364e, 'Vanilla', NULL, NULL, NULL, '', 'user_6@deleted.email', 0, 'u', 0, 0, 0, NULL, '', NULL, '', 'a:1:{s:5:"State";s:7:"Deleted";}', NULL, NULL, '2017-10-01 13:25:23', '2017-10-01 13:25:23', '127.0.0.1', '127.0.0.1', '2017-10-01 13:25:23', '127.0.0.1', '2017-10-01 13:26:35', NULL, 0, NULL, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(7, 'haip', 0x2432612430382434485572637035513257354c4e6f454354737563616552434643434851754653354c415658796562585358572f2f65316959484632, 'Vanilla', NULL, NULL, NULL, NULL, 'hai@hai.com', 0, 'u', 0, 0, NULL, NULL, NULL, NULL, '', 'a:2:{s:8:"EmailKey";s:8:"YM7L67LW";s:12:"TransientKey";s:16:"6jFBRJ7XzDC3zmgv";}', NULL, NULL, '2017-10-01 13:27:09', '2017-10-01 13:27:09', '127.0.0.1', '127.0.0.1', '2017-10-01 13:27:09', '127.0.0.1', NULL, NULL, 7, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'dudu', 0x2432612430382445304d44546771524f323376393258577779484b56756c517335472e504378646344753338516362545a32466d7a62446c53516b6d, 'Vanilla', NULL, NULL, NULL, NULL, 'dudu@dudu.com', 0, 'u', 1, 0, NULL, NULL, NULL, NULL, '', 'a:2:{s:8:"EmailKey";s:8:"TKJ9LNQ0";s:12:"TransientKey";s:16:"qvnpJ0IgzgcjCbgs";}', NULL, NULL, '2017-10-01 13:28:03', '2017-10-02 16:10:20', '127.0.0.1', '127.0.0.1', '2017-10-01 13:28:03', '127.0.0.1', NULL, NULL, 7, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserAuthentication`
--

CREATE TABLE `GDN_UserAuthentication` (
  `ForeignUserKey` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ProviderKey` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserAuthenticationNonce`
--

CREATE TABLE `GDN_UserAuthenticationNonce` (
  `Nonce` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Token` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserAuthenticationProvider`
--

CREATE TABLE `GDN_UserAuthenticationProvider` (
  `AuthenticationKey` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `AuthenticationSchemeAlias` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AssociationSecret` text COLLATE utf8_unicode_ci,
  `AssociationHashMethod` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AuthenticateUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RegisterUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SignInUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SignOutUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PasswordUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProfileUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Attributes` text COLLATE utf8_unicode_ci,
  `Active` tinyint(4) NOT NULL DEFAULT '1',
  `IsDefault` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_UserAuthenticationProvider`
--

INSERT INTO `GDN_UserAuthenticationProvider` (`AuthenticationKey`, `AuthenticationSchemeAlias`, `Name`, `URL`, `AssociationSecret`, `AssociationHashMethod`, `AuthenticateUrl`, `RegisterUrl`, `SignInUrl`, `SignOutUrl`, `PasswordUrl`, `ProfileUrl`, `Attributes`, `Active`, `IsDefault`) VALUES
('Facebook', 'facebook', NULL, '...', '...', '...', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
('Twitter', 'twitter', NULL, '...', '...', '...', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserAuthenticationToken`
--

CREATE TABLE `GDN_UserAuthenticationToken` (
  `Token` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ProviderKey` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ForeignUserKey` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TokenSecret` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `TokenType` enum('request','access') COLLATE utf8_unicode_ci NOT NULL,
  `Authorized` tinyint(4) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Lifetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserCategory`
--

CREATE TABLE `GDN_UserCategory` (
  `UserID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `DateMarkedRead` datetime DEFAULT NULL,
  `Unfollow` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserComment`
--

CREATE TABLE `GDN_UserComment` (
  `UserID` int(11) NOT NULL,
  `CommentID` int(11) NOT NULL,
  `Score` float DEFAULT NULL,
  `DateLastViewed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserConversation`
--

CREATE TABLE `GDN_UserConversation` (
  `UserID` int(11) NOT NULL,
  `ConversationID` int(11) NOT NULL,
  `CountReadMessages` int(11) NOT NULL DEFAULT '0',
  `LastMessageID` int(11) DEFAULT NULL,
  `DateLastViewed` datetime DEFAULT NULL,
  `DateCleared` datetime DEFAULT NULL,
  `Bookmarked` tinyint(4) NOT NULL DEFAULT '0',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  `DateConversationUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserDiscussion`
--

CREATE TABLE `GDN_UserDiscussion` (
  `UserID` int(11) NOT NULL,
  `DiscussionID` int(11) NOT NULL,
  `Score` float DEFAULT NULL,
  `CountComments` int(11) NOT NULL DEFAULT '0',
  `DateLastViewed` datetime DEFAULT NULL,
  `Dismissed` tinyint(4) NOT NULL DEFAULT '0',
  `Bookmarked` tinyint(4) NOT NULL DEFAULT '0',
  `Participated` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserMerge`
--

CREATE TABLE `GDN_UserMerge` (
  `MergeID` int(11) NOT NULL,
  `OldUserID` int(11) NOT NULL,
  `NewUserID` int(11) NOT NULL,
  `DateInserted` datetime NOT NULL,
  `InsertUserID` int(11) NOT NULL,
  `DateUpdated` datetime DEFAULT NULL,
  `UpdateUserID` int(11) DEFAULT NULL,
  `Attributes` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserMergeItem`
--

CREATE TABLE `GDN_UserMergeItem` (
  `MergeID` int(11) NOT NULL,
  `Table` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Column` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `RecordID` int(11) NOT NULL,
  `OldUserID` int(11) NOT NULL,
  `NewUserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserMeta`
--

CREATE TABLE `GDN_UserMeta` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Value` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_UserMeta`
--

INSERT INTO `GDN_UserMeta` (`UserID`, `Name`, `Value`) VALUES
(0, 'Garden.Analytics.LastSentDate', '20171001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserPoints`
--

CREATE TABLE `GDN_UserPoints` (
  `SlotType` enum('d','w','m','y','a') COLLATE utf8_unicode_ci NOT NULL,
  `TimeSlot` datetime NOT NULL,
  `Source` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Total',
  `CategoryID` int(11) NOT NULL DEFAULT '0',
  `UserID` int(11) NOT NULL,
  `Points` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `GDN_UserRole`
--

CREATE TABLE `GDN_UserRole` (
  `UserID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `GDN_UserRole`
--

INSERT INTO `GDN_UserRole` (`UserID`, `RoleID`) VALUES
(2, 16),
(3, 2),
(3, 8),
(4, 3),
(4, 8),
(7, 3),
(7, 8),
(8, 3),
(8, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GDN_Activity`
--
ALTER TABLE `GDN_Activity`
  ADD PRIMARY KEY (`ActivityID`),
  ADD KEY `IX_Activity_Notify` (`NotifyUserID`,`Notified`),
  ADD KEY `IX_Activity_Recent` (`NotifyUserID`,`DateUpdated`),
  ADD KEY `IX_Activity_Feed` (`NotifyUserID`,`ActivityUserID`,`DateUpdated`),
  ADD KEY `IX_Activity_DateUpdated` (`DateUpdated`),
  ADD KEY `FK_Activity_InsertUserID` (`InsertUserID`);

--
-- Indexes for table `GDN_ActivityComment`
--
ALTER TABLE `GDN_ActivityComment`
  ADD PRIMARY KEY (`ActivityCommentID`),
  ADD KEY `FK_ActivityComment_ActivityID` (`ActivityID`);

--
-- Indexes for table `GDN_ActivityType`
--
ALTER TABLE `GDN_ActivityType`
  ADD PRIMARY KEY (`ActivityTypeID`);

--
-- Indexes for table `GDN_AnalyticsLocal`
--
ALTER TABLE `GDN_AnalyticsLocal`
  ADD UNIQUE KEY `UX_AnalyticsLocal` (`TimeSlot`);

--
-- Indexes for table `GDN_Attachment`
--
ALTER TABLE `GDN_Attachment`
  ADD PRIMARY KEY (`AttachmentID`),
  ADD KEY `IX_Attachment_ForeignID` (`ForeignID`),
  ADD KEY `FK_Attachment_ForeignUserID` (`ForeignUserID`),
  ADD KEY `FK_Attachment_InsertUserID` (`InsertUserID`);

--
-- Indexes for table `GDN_Ban`
--
ALTER TABLE `GDN_Ban`
  ADD PRIMARY KEY (`BanID`),
  ADD UNIQUE KEY `UX_Ban` (`BanType`,`BanValue`);

--
-- Indexes for table `GDN_Category`
--
ALTER TABLE `GDN_Category`
  ADD PRIMARY KEY (`CategoryID`),
  ADD KEY `FK_Category_InsertUserID` (`InsertUserID`);

--
-- Indexes for table `GDN_Comment`
--
ALTER TABLE `GDN_Comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `IX_Comment_1` (`DiscussionID`,`DateInserted`),
  ADD KEY `IX_Comment_DateInserted` (`DateInserted`),
  ADD KEY `FK_Comment_InsertUserID` (`InsertUserID`);
ALTER TABLE `GDN_Comment` ADD FULLTEXT KEY `TX_Comment` (`Body`);

--
-- Indexes for table `GDN_Conversation`
--
ALTER TABLE `GDN_Conversation`
  ADD PRIMARY KEY (`ConversationID`),
  ADD KEY `IX_Conversation_Type` (`Type`),
  ADD KEY `IX_Conversation_RegardingID` (`RegardingID`),
  ADD KEY `FK_Conversation_FirstMessageID` (`FirstMessageID`),
  ADD KEY `FK_Conversation_InsertUserID` (`InsertUserID`),
  ADD KEY `FK_Conversation_DateInserted` (`DateInserted`),
  ADD KEY `FK_Conversation_UpdateUserID` (`UpdateUserID`);

--
-- Indexes for table `GDN_ConversationMessage`
--
ALTER TABLE `GDN_ConversationMessage`
  ADD PRIMARY KEY (`MessageID`),
  ADD KEY `FK_ConversationMessage_ConversationID` (`ConversationID`),
  ADD KEY `FK_ConversationMessage_InsertUserID` (`InsertUserID`);

--
-- Indexes for table `GDN_Discussion`
--
ALTER TABLE `GDN_Discussion`
  ADD PRIMARY KEY (`DiscussionID`),
  ADD KEY `IX_Discussion_Type` (`Type`),
  ADD KEY `IX_Discussion_ForeignID` (`ForeignID`),
  ADD KEY `IX_Discussion_DateInserted` (`DateInserted`),
  ADD KEY `IX_Discussion_DateLastComment` (`DateLastComment`),
  ADD KEY `IX_Discussion_RegardingID` (`RegardingID`),
  ADD KEY `IX_Discussion_CategoryPages` (`CategoryID`,`DateLastComment`),
  ADD KEY `IX_Discussion_CategoryInserted` (`CategoryID`,`DateInserted`),
  ADD KEY `FK_Discussion_InsertUserID` (`InsertUserID`);
ALTER TABLE `GDN_Discussion` ADD FULLTEXT KEY `TX_Discussion` (`Name`,`Body`);

--
-- Indexes for table `GDN_Draft`
--
ALTER TABLE `GDN_Draft`
  ADD PRIMARY KEY (`DraftID`),
  ADD KEY `FK_Draft_DiscussionID` (`DiscussionID`),
  ADD KEY `FK_Draft_CategoryID` (`CategoryID`),
  ADD KEY `FK_Draft_InsertUserID` (`InsertUserID`);

--
-- Indexes for table `GDN_Flag`
--
ALTER TABLE `GDN_Flag`
  ADD KEY `FK_Flag_InsertUserID` (`InsertUserID`),
  ADD KEY `FK_Flag_ForeignURL` (`ForeignURL`);

--
-- Indexes for table `GDN_Invitation`
--
ALTER TABLE `GDN_Invitation`
  ADD PRIMARY KEY (`InvitationID`),
  ADD UNIQUE KEY `UX_Invitation` (`Code`),
  ADD KEY `IX_Invitation_Email` (`Email`),
  ADD KEY `IX_Invitation_userdate` (`InsertUserID`,`DateInserted`);

--
-- Indexes for table `GDN_Log`
--
ALTER TABLE `GDN_Log`
  ADD PRIMARY KEY (`LogID`),
  ADD KEY `IX_Log_Operation` (`Operation`),
  ADD KEY `IX_Log_RecordType` (`RecordType`),
  ADD KEY `IX_Log_RecordID` (`RecordID`),
  ADD KEY `IX_Log_RecordUserID` (`RecordUserID`),
  ADD KEY `IX_Log_RecordIPAddress` (`RecordIPAddress`),
  ADD KEY `IX_Log_DateInserted` (`DateInserted`),
  ADD KEY `IX_Log_ParentRecordID` (`ParentRecordID`),
  ADD KEY `FK_Log_CategoryID` (`CategoryID`);

--
-- Indexes for table `GDN_Media`
--
ALTER TABLE `GDN_Media`
  ADD PRIMARY KEY (`MediaID`),
  ADD KEY `IX_Media_Foreign` (`ForeignID`,`ForeignTable`);

--
-- Indexes for table `GDN_Message`
--
ALTER TABLE `GDN_Message`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `GDN_Permission`
--
ALTER TABLE `GDN_Permission`
  ADD PRIMARY KEY (`PermissionID`),
  ADD KEY `FK_Permission_RoleID` (`RoleID`);

--
-- Indexes for table `GDN_Regarding`
--
ALTER TABLE `GDN_Regarding`
  ADD PRIMARY KEY (`RegardingID`),
  ADD KEY `FK_Regarding_Type` (`Type`);

--
-- Indexes for table `GDN_Role`
--
ALTER TABLE `GDN_Role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `GDN_Session`
--
ALTER TABLE `GDN_Session`
  ADD PRIMARY KEY (`SessionID`);

--
-- Indexes for table `GDN_Spammer`
--
ALTER TABLE `GDN_Spammer`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `GDN_Tag`
--
ALTER TABLE `GDN_Tag`
  ADD PRIMARY KEY (`TagID`),
  ADD UNIQUE KEY `UX_Tag` (`Name`,`CategoryID`),
  ADD KEY `IX_Tag_FullName` (`FullName`),
  ADD KEY `IX_Tag_Type` (`Type`),
  ADD KEY `FK_Tag_ParentTagID` (`ParentTagID`),
  ADD KEY `FK_Tag_InsertUserID` (`InsertUserID`);

--
-- Indexes for table `GDN_TagDiscussion`
--
ALTER TABLE `GDN_TagDiscussion`
  ADD PRIMARY KEY (`TagID`,`DiscussionID`),
  ADD KEY `IX_TagDiscussion_CategoryID` (`CategoryID`);

--
-- Indexes for table `GDN_User`
--
ALTER TABLE `GDN_User`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `FK_User_Name` (`Name`),
  ADD KEY `IX_User_Email` (`Email`),
  ADD KEY `IX_User_DateLastActive` (`DateLastActive`),
  ADD KEY `IX_User_DateInserted` (`DateInserted`);

--
-- Indexes for table `GDN_UserAuthentication`
--
ALTER TABLE `GDN_UserAuthentication`
  ADD PRIMARY KEY (`ForeignUserKey`,`ProviderKey`),
  ADD KEY `FK_UserAuthentication_UserID` (`UserID`);

--
-- Indexes for table `GDN_UserAuthenticationNonce`
--
ALTER TABLE `GDN_UserAuthenticationNonce`
  ADD PRIMARY KEY (`Nonce`);

--
-- Indexes for table `GDN_UserAuthenticationProvider`
--
ALTER TABLE `GDN_UserAuthenticationProvider`
  ADD PRIMARY KEY (`AuthenticationKey`);

--
-- Indexes for table `GDN_UserAuthenticationToken`
--
ALTER TABLE `GDN_UserAuthenticationToken`
  ADD PRIMARY KEY (`Token`,`ProviderKey`);

--
-- Indexes for table `GDN_UserCategory`
--
ALTER TABLE `GDN_UserCategory`
  ADD PRIMARY KEY (`UserID`,`CategoryID`);

--
-- Indexes for table `GDN_UserComment`
--
ALTER TABLE `GDN_UserComment`
  ADD PRIMARY KEY (`UserID`,`CommentID`);

--
-- Indexes for table `GDN_UserConversation`
--
ALTER TABLE `GDN_UserConversation`
  ADD PRIMARY KEY (`UserID`,`ConversationID`),
  ADD KEY `IX_UserConversation_Inbox` (`UserID`,`Deleted`,`DateConversationUpdated`),
  ADD KEY `FK_UserConversation_ConversationID` (`ConversationID`);

--
-- Indexes for table `GDN_UserDiscussion`
--
ALTER TABLE `GDN_UserDiscussion`
  ADD PRIMARY KEY (`UserID`,`DiscussionID`),
  ADD KEY `FK_UserDiscussion_DiscussionID` (`DiscussionID`);

--
-- Indexes for table `GDN_UserMerge`
--
ALTER TABLE `GDN_UserMerge`
  ADD PRIMARY KEY (`MergeID`),
  ADD KEY `FK_UserMerge_OldUserID` (`OldUserID`),
  ADD KEY `FK_UserMerge_NewUserID` (`NewUserID`);

--
-- Indexes for table `GDN_UserMergeItem`
--
ALTER TABLE `GDN_UserMergeItem`
  ADD KEY `FK_UserMergeItem_MergeID` (`MergeID`);

--
-- Indexes for table `GDN_UserMeta`
--
ALTER TABLE `GDN_UserMeta`
  ADD PRIMARY KEY (`UserID`,`Name`),
  ADD KEY `IX_UserMeta_Name` (`Name`);

--
-- Indexes for table `GDN_UserPoints`
--
ALTER TABLE `GDN_UserPoints`
  ADD PRIMARY KEY (`SlotType`,`TimeSlot`,`Source`,`CategoryID`,`UserID`);

--
-- Indexes for table `GDN_UserRole`
--
ALTER TABLE `GDN_UserRole`
  ADD PRIMARY KEY (`UserID`,`RoleID`),
  ADD KEY `IX_UserRole_RoleID` (`RoleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `GDN_Activity`
--
ALTER TABLE `GDN_Activity`
  MODIFY `ActivityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `GDN_ActivityComment`
--
ALTER TABLE `GDN_ActivityComment`
  MODIFY `ActivityCommentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_ActivityType`
--
ALTER TABLE `GDN_ActivityType`
  MODIFY `ActivityTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `GDN_Attachment`
--
ALTER TABLE `GDN_Attachment`
  MODIFY `AttachmentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_Ban`
--
ALTER TABLE `GDN_Ban`
  MODIFY `BanID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_Category`
--
ALTER TABLE `GDN_Category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `GDN_Comment`
--
ALTER TABLE `GDN_Comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `GDN_Conversation`
--
ALTER TABLE `GDN_Conversation`
  MODIFY `ConversationID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_ConversationMessage`
--
ALTER TABLE `GDN_ConversationMessage`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_Discussion`
--
ALTER TABLE `GDN_Discussion`
  MODIFY `DiscussionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `GDN_Draft`
--
ALTER TABLE `GDN_Draft`
  MODIFY `DraftID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_Invitation`
--
ALTER TABLE `GDN_Invitation`
  MODIFY `InvitationID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_Log`
--
ALTER TABLE `GDN_Log`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `GDN_Media`
--
ALTER TABLE `GDN_Media`
  MODIFY `MediaID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_Message`
--
ALTER TABLE `GDN_Message`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_Permission`
--
ALTER TABLE `GDN_Permission`
  MODIFY `PermissionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `GDN_Regarding`
--
ALTER TABLE `GDN_Regarding`
  MODIFY `RegardingID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_Role`
--
ALTER TABLE `GDN_Role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `GDN_Tag`
--
ALTER TABLE `GDN_Tag`
  MODIFY `TagID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GDN_User`
--
ALTER TABLE `GDN_User`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `GDN_UserMerge`
--
ALTER TABLE `GDN_UserMerge`
  MODIFY `MergeID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
