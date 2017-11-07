/*
 Navicat Premium Data Transfer

 Source Server         : tournapp
 Source Server Type    : PostgreSQL
 Source Server Version : 90605
 Source Host           : localhost:5432
 Source Catalog        : test_tournapps
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 90605
 File Encoding         : 65001

 Date: 16/10/2017 22:20:45
*/


-- ----------------------------
-- Sequence structure for countries_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "countries_id_seq";
CREATE SEQUENCE "countries_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for match_status_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "match_status_id_seq";
CREATE SEQUENCE "match_status_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for matches_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "matches_id_seq";
CREATE SEQUENCE "matches_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for migrations_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "migrations_id_seq";
CREATE SEQUENCE "migrations_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for players_club_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "players_club_id_seq";
CREATE SEQUENCE "players_club_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for players_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "players_id_seq";
CREATE SEQUENCE "players_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for players_state_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "players_state_seq";
CREATE SEQUENCE "players_state_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for referees_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "referees_id_seq";
CREATE SEQUENCE "referees_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for session_referees_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "session_referees_id_seq";
CREATE SEQUENCE "session_referees_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for team_matches_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "team_matches_id_seq";
CREATE SEQUENCE "team_matches_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for teams_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "teams_id_seq";
CREATE SEQUENCE "teams_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS "categories";
CREATE TABLE "categories" (
  "id" uuid NOT NULL DEFAULT uuid_generate_v1(),
  "name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "region_id" uuid DEFAULT NULL,
  "class_id" uuid DEFAULT NULL,
  "match_type" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "court_size_id" uuid DEFAULT NULL,
  "location" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "ball_type_id" uuid DEFAULT NULL,
  "level" json DEFAULT NULL,
  "age_limit" json DEFAULT NULL,
  "start_date" date DEFAULT NULL,
  "end_date" date DEFAULT NULL,
  "publish_start_date" date DEFAULT NULL,
  "publish_end_date" date DEFAULT NULL,
  "start_join_date" date DEFAULT NULL,
  "end_join_date" date DEFAULT NULL,
  "force_join" bool DEFAULT false,
  "fee" float8 DEFAULT NULL,
  "currency" varchar(10) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "ranking_limit" json DEFAULT NULL
)
;
ALTER TABLE "categories" OWNER TO "postgres";

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO "categories" VALUES ('766c365e-cecd-4a89-ad1a-d4edd324a5a8', 'Boys Ten', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f', NULL, NULL, NULL);
INSERT INTO "categories" VALUES ('6cefe6f4-a6a6-11e7-ad1b-3fa9b1b74e79', 'Girls Ten', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for clubs
-- ----------------------------
DROP TABLE IF EXISTS "clubs";
CREATE TABLE "clubs" (
  "id" int4 NOT NULL DEFAULT NULL,
  "name" text COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "email" text COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "phone" text COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "website" text COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "logo" text COLLATE "pg_catalog"."default" DEFAULT NULL,
  "address" text COLLATE "pg_catalog"."default" DEFAULT NULL,
  "city" text COLLATE "pg_catalog"."default" DEFAULT NULL,
  "state" text COLLATE "pg_catalog"."default" DEFAULT NULL,
  "zip" text COLLATE "pg_catalog"."default" DEFAULT NULL,
  "country_id" int4 DEFAULT NULL
)
;
ALTER TABLE "clubs" OWNER TO "postgres";

-- ----------------------------
-- Records of clubs
-- ----------------------------
BEGIN;
INSERT INTO "clubs" VALUES (1, 'Saigon Sports Club', 'test@test.com', '123456789', 'wwww.gkim.digital', NULL, NULL, NULL, NULL, NULL, 1);
INSERT INTO "clubs" VALUES (2, 'Saigon Tennis Club', 'test@test.com', '123456789', 'wwww.gkim.digital', NULL, NULL, NULL, NULL, NULL, 1);
INSERT INTO "clubs" VALUES (3, 'Hanoi Tennis Club', 'test@testl.com', '1233232', 'www.gkim.vn', NULL, NULL, NULL, NULL, NULL, 1);
COMMIT;

-- ----------------------------
-- Table structure for competitions
-- ----------------------------
DROP TABLE IF EXISTS "competitions";
CREATE TABLE "competitions" (
  "id" uuid NOT NULL DEFAULT NULL
)
;
ALTER TABLE "competitions" OWNER TO "postgres";

-- ----------------------------
-- Table structure for countries
-- ----------------------------
DROP TABLE IF EXISTS "countries";
CREATE TABLE "countries" (
  "id" int2 NOT NULL DEFAULT nextval('countries_id_seq'::regclass),
  "code" varchar(2) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "cities" json DEFAULT NULL
)
;
ALTER TABLE "countries" OWNER TO "postgres";

-- ----------------------------
-- Records of countries
-- ----------------------------
BEGIN;
INSERT INTO "countries" VALUES (240, 'AF', 'Afghanistan', NULL);
INSERT INTO "countries" VALUES (278, 'CV', 'Cape Verde', NULL);
INSERT INTO "countries" VALUES (279, 'KY', 'Cayman Islands', NULL);
INSERT INTO "countries" VALUES (280, 'CF', 'Central African Republic', NULL);
INSERT INTO "countries" VALUES (281, 'TD', 'Chad', NULL);
INSERT INTO "countries" VALUES (329, 'GW', 'Guinea-Bissau', NULL);
INSERT INTO "countries" VALUES (330, 'GY', 'Guyana', NULL);
INSERT INTO "countries" VALUES (282, 'CL', 'Chile', NULL);
INSERT INTO "countries" VALUES (283, 'CN', 'China', NULL);
INSERT INTO "countries" VALUES (284, 'CX', 'Christmas Island', NULL);
INSERT INTO "countries" VALUES (285, 'CC', 'Cocos (Keeling) Islands', NULL);
INSERT INTO "countries" VALUES (286, 'CO', 'Colombia', NULL);
INSERT INTO "countries" VALUES (287, 'KM', 'Comoros', NULL);
INSERT INTO "countries" VALUES (288, 'CG', 'Congo', NULL);
INSERT INTO "countries" VALUES (289, 'CD', 'Congo, the Democratic Republic of the', NULL);
INSERT INTO "countries" VALUES (290, 'CK', 'Cook Islands', NULL);
INSERT INTO "countries" VALUES (291, 'CR', 'Costa Rica', NULL);
INSERT INTO "countries" VALUES (292, 'CI', 'Cote D''Ivoire', NULL);
INSERT INTO "countries" VALUES (293, 'HR', 'Croatia', NULL);
INSERT INTO "countries" VALUES (294, 'CU', 'Cuba', NULL);
INSERT INTO "countries" VALUES (295, 'CY', 'Cyprus', NULL);
INSERT INTO "countries" VALUES (296, 'CZ', 'Czech Republic', NULL);
INSERT INTO "countries" VALUES (297, 'DK', 'Denmark', NULL);
INSERT INTO "countries" VALUES (298, 'DJ', 'Djibouti', NULL);
INSERT INTO "countries" VALUES (299, 'DM', 'Dominica', NULL);
INSERT INTO "countries" VALUES (300, 'DO', 'Dominican Republic', NULL);
INSERT INTO "countries" VALUES (328, 'GN', 'Guinea', NULL);
INSERT INTO "countries" VALUES (301, 'EC', 'Ecuador', NULL);
INSERT INTO "countries" VALUES (302, 'EG', 'Egypt', NULL);
INSERT INTO "countries" VALUES (303, 'SV', 'El Salvador', NULL);
INSERT INTO "countries" VALUES (304, 'GQ', 'Equatorial Guinea', NULL);
INSERT INTO "countries" VALUES (305, 'ER', 'Eritrea', NULL);
INSERT INTO "countries" VALUES (241, 'AL', 'Albania', NULL);
INSERT INTO "countries" VALUES (242, 'DZ', 'Algeria', NULL);
INSERT INTO "countries" VALUES (243, 'AS', 'American Samoa', NULL);
INSERT INTO "countries" VALUES (244, 'AD', 'Andorra', NULL);
INSERT INTO "countries" VALUES (245, 'AO', 'Angola', NULL);
INSERT INTO "countries" VALUES (246, 'AI', 'Anguilla', NULL);
INSERT INTO "countries" VALUES (247, 'AQ', 'Antarctica', NULL);
INSERT INTO "countries" VALUES (248, 'AG', 'Antigua and Barbuda', NULL);
INSERT INTO "countries" VALUES (249, 'AR', 'Argentina', NULL);
INSERT INTO "countries" VALUES (250, 'AM', 'Armenia', NULL);
INSERT INTO "countries" VALUES (251, 'AW', 'Aruba', NULL);
INSERT INTO "countries" VALUES (252, 'AU', 'Australia', NULL);
INSERT INTO "countries" VALUES (253, 'AT', 'Austria', NULL);
INSERT INTO "countries" VALUES (254, 'AZ', 'Azerbaijan', NULL);
INSERT INTO "countries" VALUES (255, 'BS', 'Bahamas', NULL);
INSERT INTO "countries" VALUES (256, 'BH', 'Bahrain', NULL);
INSERT INTO "countries" VALUES (257, 'BD', 'Bangladesh', NULL);
INSERT INTO "countries" VALUES (258, 'BB', 'Barbados', NULL);
INSERT INTO "countries" VALUES (259, 'BY', 'Belarus', NULL);
INSERT INTO "countries" VALUES (260, 'BE', 'Belgium', NULL);
INSERT INTO "countries" VALUES (261, 'BZ', 'Belize', NULL);
INSERT INTO "countries" VALUES (262, 'BJ', 'Benin', NULL);
INSERT INTO "countries" VALUES (263, 'BM', 'Bermuda', NULL);
INSERT INTO "countries" VALUES (264, 'BT', 'Bhutan', NULL);
INSERT INTO "countries" VALUES (265, 'BO', 'Bolivia', NULL);
INSERT INTO "countries" VALUES (266, 'BA', 'Bosnia and Herzegovina', NULL);
INSERT INTO "countries" VALUES (267, 'BW', 'Botswana', NULL);
INSERT INTO "countries" VALUES (268, 'BV', 'Bouvet Island', NULL);
INSERT INTO "countries" VALUES (269, 'BR', 'Brazil', NULL);
INSERT INTO "countries" VALUES (270, 'IO', 'British Indian Ocean Territory', NULL);
INSERT INTO "countries" VALUES (271, 'BN', 'Brunei Darussalam', NULL);
INSERT INTO "countries" VALUES (272, 'BG', 'Bulgaria', NULL);
INSERT INTO "countries" VALUES (273, 'BF', 'Burkina Faso', NULL);
INSERT INTO "countries" VALUES (274, 'BI', 'Burundi', NULL);
INSERT INTO "countries" VALUES (275, 'KH', 'Cambodia', NULL);
INSERT INTO "countries" VALUES (276, 'CM', 'Cameroon', NULL);
INSERT INTO "countries" VALUES (277, 'CA', 'Canada', NULL);
INSERT INTO "countries" VALUES (306, 'EE', 'Estonia', NULL);
INSERT INTO "countries" VALUES (307, 'ET', 'Ethiopia', NULL);
INSERT INTO "countries" VALUES (308, 'FK', 'Falkland Islands (Malvinas)', NULL);
INSERT INTO "countries" VALUES (309, 'FO', 'Faroe Islands', NULL);
INSERT INTO "countries" VALUES (310, 'FJ', 'Fiji', NULL);
INSERT INTO "countries" VALUES (311, 'FI', 'Finland', NULL);
INSERT INTO "countries" VALUES (312, 'FR', 'France', NULL);
INSERT INTO "countries" VALUES (313, 'GF', 'French Guiana', NULL);
INSERT INTO "countries" VALUES (314, 'PF', 'French Polynesia', NULL);
INSERT INTO "countries" VALUES (315, 'TF', 'French Southern Territories', NULL);
INSERT INTO "countries" VALUES (316, 'GA', 'Gabon', NULL);
INSERT INTO "countries" VALUES (317, 'GM', 'Gambia', NULL);
INSERT INTO "countries" VALUES (318, 'GE', 'Georgia', NULL);
INSERT INTO "countries" VALUES (319, 'DE', 'Germany', NULL);
INSERT INTO "countries" VALUES (320, 'GH', 'Ghana', NULL);
INSERT INTO "countries" VALUES (321, 'GI', 'Gibraltar', NULL);
INSERT INTO "countries" VALUES (322, 'GR', 'Greece', NULL);
INSERT INTO "countries" VALUES (323, 'GL', 'Greenland', NULL);
INSERT INTO "countries" VALUES (324, 'GD', 'Grenada', NULL);
INSERT INTO "countries" VALUES (325, 'GP', 'Guadeloupe', NULL);
INSERT INTO "countries" VALUES (326, 'GU', 'Guam', NULL);
INSERT INTO "countries" VALUES (327, 'GT', 'Guatemala', NULL);
INSERT INTO "countries" VALUES (331, 'HT', 'Haiti', NULL);
INSERT INTO "countries" VALUES (332, 'HM', 'Heard Island and Mcdonald Islands', NULL);
INSERT INTO "countries" VALUES (333, 'VA', 'Holy See (Vatican City State)', NULL);
INSERT INTO "countries" VALUES (334, 'HN', 'Honduras', NULL);
INSERT INTO "countries" VALUES (335, 'HK', 'Hong Kong', NULL);
INSERT INTO "countries" VALUES (336, 'HU', 'Hungary', NULL);
INSERT INTO "countries" VALUES (337, 'IS', 'Iceland', NULL);
INSERT INTO "countries" VALUES (338, 'IN', 'India', NULL);
INSERT INTO "countries" VALUES (339, 'ID', 'Indonesia', NULL);
INSERT INTO "countries" VALUES (340, 'IR', 'Iran, Islamic Republic of', NULL);
INSERT INTO "countries" VALUES (341, 'IQ', 'Iraq', NULL);
INSERT INTO "countries" VALUES (342, 'IE', 'Ireland', NULL);
INSERT INTO "countries" VALUES (343, 'IL', 'Israel', NULL);
INSERT INTO "countries" VALUES (344, 'IT', 'Italy', NULL);
INSERT INTO "countries" VALUES (345, 'JM', 'Jamaica', NULL);
INSERT INTO "countries" VALUES (346, 'JP', 'Japan', NULL);
INSERT INTO "countries" VALUES (347, 'JO', 'Jordan', NULL);
INSERT INTO "countries" VALUES (348, 'KZ', 'Kazakhstan', NULL);
INSERT INTO "countries" VALUES (349, 'KE', 'Kenya', NULL);
INSERT INTO "countries" VALUES (350, 'KI', 'Kiribati', NULL);
INSERT INTO "countries" VALUES (351, 'KP', 'Korea, Democratic People''s Republic of', NULL);
INSERT INTO "countries" VALUES (352, 'KR', 'Korea, Republic of', NULL);
INSERT INTO "countries" VALUES (428, 'CS', 'Serbia and Montenegro', NULL);
INSERT INTO "countries" VALUES (429, 'SC', 'Seychelles', NULL);
INSERT INTO "countries" VALUES (430, 'SL', 'Sierra Leone', NULL);
INSERT INTO "countries" VALUES (353, 'KW', 'Kuwait', NULL);
INSERT INTO "countries" VALUES (354, 'KG', 'Kyrgyzstan', NULL);
INSERT INTO "countries" VALUES (355, 'LA', 'Lao People''s Democratic Republic', NULL);
INSERT INTO "countries" VALUES (356, 'LV', 'Latvia', NULL);
INSERT INTO "countries" VALUES (357, 'LB', 'Lebanon', NULL);
INSERT INTO "countries" VALUES (358, 'LS', 'Lesotho', NULL);
INSERT INTO "countries" VALUES (359, 'LR', 'Liberia', NULL);
INSERT INTO "countries" VALUES (360, 'LY', 'Libyan Arab Jamahiriya', NULL);
INSERT INTO "countries" VALUES (361, 'LI', 'Liechtenstein', NULL);
INSERT INTO "countries" VALUES (362, 'LT', 'Lithuania', NULL);
INSERT INTO "countries" VALUES (363, 'LU', 'Luxembourg', NULL);
INSERT INTO "countries" VALUES (364, 'MO', 'Macao', NULL);
INSERT INTO "countries" VALUES (365, 'MK', 'Macedonia, the Former Yugoslav Republic of', NULL);
INSERT INTO "countries" VALUES (366, 'MG', 'Madagascar', NULL);
INSERT INTO "countries" VALUES (367, 'MW', 'Malawi', NULL);
INSERT INTO "countries" VALUES (368, 'MY', 'Malaysia', NULL);
INSERT INTO "countries" VALUES (369, 'MV', 'Maldives', NULL);
INSERT INTO "countries" VALUES (370, 'ML', 'Mali', NULL);
INSERT INTO "countries" VALUES (371, 'MT', 'Malta', NULL);
INSERT INTO "countries" VALUES (372, 'MH', 'Marshall Islands', NULL);
INSERT INTO "countries" VALUES (373, 'MQ', 'Martinique', NULL);
INSERT INTO "countries" VALUES (374, 'MR', 'Mauritania', NULL);
INSERT INTO "countries" VALUES (375, 'MU', 'Mauritius', NULL);
INSERT INTO "countries" VALUES (376, 'YT', 'Mayotte', NULL);
INSERT INTO "countries" VALUES (377, 'MX', 'Mexico', NULL);
INSERT INTO "countries" VALUES (378, 'FM', 'Micronesia, Federated States of', NULL);
INSERT INTO "countries" VALUES (379, 'MD', 'Moldova, Republic of', NULL);
INSERT INTO "countries" VALUES (380, 'MC', 'Monaco', NULL);
INSERT INTO "countries" VALUES (381, 'MN', 'Mongolia', NULL);
INSERT INTO "countries" VALUES (382, 'MS', 'Montserrat', NULL);
INSERT INTO "countries" VALUES (383, 'MA', 'Morocco', NULL);
INSERT INTO "countries" VALUES (384, 'MZ', 'Mozambique', NULL);
INSERT INTO "countries" VALUES (385, 'MM', 'Myanmar', NULL);
INSERT INTO "countries" VALUES (386, 'NA', 'Namibia', NULL);
INSERT INTO "countries" VALUES (387, 'NR', 'Nauru', NULL);
INSERT INTO "countries" VALUES (388, 'NP', 'Nepal', NULL);
INSERT INTO "countries" VALUES (389, 'NL', 'Netherlands', NULL);
INSERT INTO "countries" VALUES (390, 'AN', 'Netherlands Antilles', NULL);
INSERT INTO "countries" VALUES (391, 'NC', 'New Caledonia', NULL);
INSERT INTO "countries" VALUES (392, 'NZ', 'New Zealand', NULL);
INSERT INTO "countries" VALUES (393, 'NI', 'Nicaragua', NULL);
INSERT INTO "countries" VALUES (394, 'NE', 'Niger', NULL);
INSERT INTO "countries" VALUES (395, 'NG', 'Nigeria', NULL);
INSERT INTO "countries" VALUES (396, 'NU', 'Niue', NULL);
INSERT INTO "countries" VALUES (397, 'NF', 'Norfolk Island', NULL);
INSERT INTO "countries" VALUES (398, 'MP', 'Northern Mariana Islands', NULL);
INSERT INTO "countries" VALUES (399, 'NO', 'Norway', NULL);
INSERT INTO "countries" VALUES (400, 'OM', 'Oman', NULL);
INSERT INTO "countries" VALUES (401, 'PK', 'Pakistan', NULL);
INSERT INTO "countries" VALUES (402, 'PW', 'Palau', NULL);
INSERT INTO "countries" VALUES (403, 'PS', 'Palestinian Territory, Occupied', NULL);
INSERT INTO "countries" VALUES (404, 'PA', 'Panama', NULL);
INSERT INTO "countries" VALUES (405, 'PG', 'Papua New Guinea', NULL);
INSERT INTO "countries" VALUES (406, 'PY', 'Paraguay', NULL);
INSERT INTO "countries" VALUES (407, 'PE', 'Peru', NULL);
INSERT INTO "countries" VALUES (408, 'PH', 'Philippines', NULL);
INSERT INTO "countries" VALUES (409, 'PN', 'Pitcairn', NULL);
INSERT INTO "countries" VALUES (410, 'PL', 'Poland', NULL);
INSERT INTO "countries" VALUES (411, 'PT', 'Portugal', NULL);
INSERT INTO "countries" VALUES (412, 'PR', 'Puerto Rico', NULL);
INSERT INTO "countries" VALUES (413, 'QA', 'Qatar', NULL);
INSERT INTO "countries" VALUES (414, 'RE', 'Reunion', NULL);
INSERT INTO "countries" VALUES (415, 'RO', 'Romania', NULL);
INSERT INTO "countries" VALUES (416, 'RU', 'Russian Federation', NULL);
INSERT INTO "countries" VALUES (417, 'RW', 'Rwanda', NULL);
INSERT INTO "countries" VALUES (418, 'SH', 'Saint Helena', NULL);
INSERT INTO "countries" VALUES (419, 'KN', 'Saint Kitts and Nevis', NULL);
INSERT INTO "countries" VALUES (420, 'LC', 'Saint Lucia', NULL);
INSERT INTO "countries" VALUES (421, 'PM', 'Saint Pierre and Miquelon', NULL);
INSERT INTO "countries" VALUES (422, 'VC', 'Saint Vincent and the Grenadines', NULL);
INSERT INTO "countries" VALUES (423, 'WS', 'Samoa', NULL);
INSERT INTO "countries" VALUES (424, 'SM', 'San Marino', NULL);
INSERT INTO "countries" VALUES (425, 'ST', 'Sao Tome and Principe', NULL);
INSERT INTO "countries" VALUES (426, 'SA', 'Saudi Arabia', NULL);
INSERT INTO "countries" VALUES (427, 'SN', 'Senegal', NULL);
INSERT INTO "countries" VALUES (431, 'SG', 'Singapore', NULL);
INSERT INTO "countries" VALUES (432, 'SK', 'Slovakia', NULL);
INSERT INTO "countries" VALUES (433, 'SI', 'Slovenia', NULL);
INSERT INTO "countries" VALUES (434, 'SB', 'Solomon Islands', NULL);
INSERT INTO "countries" VALUES (435, 'SO', 'Somalia', NULL);
INSERT INTO "countries" VALUES (436, 'ZA', 'South Africa', NULL);
INSERT INTO "countries" VALUES (437, 'GS', 'South Georgia and the South Sandwich Islands', NULL);
INSERT INTO "countries" VALUES (438, 'ES', 'Spain', NULL);
INSERT INTO "countries" VALUES (439, 'LK', 'Sri Lanka', NULL);
INSERT INTO "countries" VALUES (440, 'SD', 'Sudan', NULL);
INSERT INTO "countries" VALUES (441, 'SR', 'Suriname', NULL);
INSERT INTO "countries" VALUES (442, 'SJ', 'Svalbard and Jan Mayen', NULL);
INSERT INTO "countries" VALUES (443, 'SZ', 'Swaziland', NULL);
INSERT INTO "countries" VALUES (444, 'SE', 'Sweden', NULL);
INSERT INTO "countries" VALUES (445, 'CH', 'Switzerland', NULL);
INSERT INTO "countries" VALUES (446, 'SY', 'Syrian Arab Republic', NULL);
INSERT INTO "countries" VALUES (447, 'TW', 'Taiwan, Province of China', NULL);
INSERT INTO "countries" VALUES (448, 'TJ', 'Tajikistan', NULL);
INSERT INTO "countries" VALUES (449, 'TZ', 'Tanzania, United Republic of', NULL);
INSERT INTO "countries" VALUES (450, 'TH', 'Thailand', NULL);
INSERT INTO "countries" VALUES (451, 'TL', 'Timor-Leste', NULL);
INSERT INTO "countries" VALUES (452, 'TG', 'Togo', NULL);
INSERT INTO "countries" VALUES (453, 'TK', 'Tokelau', NULL);
INSERT INTO "countries" VALUES (454, 'TO', 'Tonga', NULL);
INSERT INTO "countries" VALUES (455, 'TT', 'Trinidad and Tobago', NULL);
INSERT INTO "countries" VALUES (456, 'TN', 'Tunisia', NULL);
INSERT INTO "countries" VALUES (457, 'TR', 'Turkey', NULL);
INSERT INTO "countries" VALUES (458, 'TM', 'Turkmenistan', NULL);
INSERT INTO "countries" VALUES (459, 'TC', 'Turks and Caicos Islands', NULL);
INSERT INTO "countries" VALUES (460, 'TV', 'Tuvalu', NULL);
INSERT INTO "countries" VALUES (461, 'UG', 'Uganda', NULL);
INSERT INTO "countries" VALUES (462, 'UA', 'Ukraine', NULL);
INSERT INTO "countries" VALUES (463, 'AE', 'United Arab Emirates', NULL);
INSERT INTO "countries" VALUES (464, 'GB', 'United Kingdom', NULL);
INSERT INTO "countries" VALUES (465, 'US', 'United States', NULL);
INSERT INTO "countries" VALUES (466, 'UM', 'United States Minor Outlying Islands', NULL);
INSERT INTO "countries" VALUES (467, 'UY', 'Uruguay', NULL);
INSERT INTO "countries" VALUES (468, 'UZ', 'Uzbekistan', NULL);
INSERT INTO "countries" VALUES (469, 'VU', 'Vanuatu', NULL);
INSERT INTO "countries" VALUES (470, 'VE', 'Venezuela', NULL);
INSERT INTO "countries" VALUES (471, 'VN', 'Viet Nam', NULL);
INSERT INTO "countries" VALUES (472, 'VG', 'Virgin Islands, British', NULL);
INSERT INTO "countries" VALUES (473, 'VI', 'Virgin Islands, U.s.', NULL);
INSERT INTO "countries" VALUES (474, 'WF', 'Wallis and Futuna', NULL);
INSERT INTO "countries" VALUES (475, 'EH', 'Western Sahara', NULL);
INSERT INTO "countries" VALUES (476, 'YE', 'Yemen', NULL);
INSERT INTO "countries" VALUES (477, 'ZM', 'Zambia', NULL);
INSERT INTO "countries" VALUES (478, 'ZW', 'Zimbabwe', NULL);
COMMIT;

-- ----------------------------
-- Table structure for match_status
-- ----------------------------
DROP TABLE IF EXISTS "match_status";
CREATE TABLE "match_status" (
  "name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "color" varchar(7) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "class_name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "text_style" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "id" int4 NOT NULL DEFAULT nextval('match_status_id_seq'::regclass)
)
;
ALTER TABLE "match_status" OWNER TO "postgres";

-- ----------------------------
-- Records of match_status
-- ----------------------------
BEGIN;
INSERT INTO "match_status" VALUES ('Match over', '#e4b343', 'bg-yellow', 'text-white', 1);
INSERT INTO "match_status" VALUES ('In Progress', '#959595', 'bg-grey-darker', 'text-blue', 2);
INSERT INTO "match_status" VALUES ('Waiting', '#637bd4', 'bg-green', 'text-blue', 3);
INSERT INTO "match_status" VALUES ('Ready to go', '#87c137', 'bg-blue', 'text-light-blue', 4);
INSERT INTO "match_status" VALUES ('Match Late', '#ff0000', 'bg-red', 'text-white', 6);
INSERT INTO "match_status" VALUES ('Pre match', '#ff6d88', 'bg-light', 'text-blue', 5);
COMMIT;

-- ----------------------------
-- Table structure for matches
-- ----------------------------
DROP TABLE IF EXISTS "matches";
CREATE TABLE "matches" (
  "scheduled_time" varchar(6) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "created_date" timestamp(6) DEFAULT NULL,
  "updated_date" timestamp(0) DEFAULT NULL,
  "match_details" json DEFAULT NULL,
  "type_id" uuid DEFAULT uuid_generate_v1(),
  "session_id" uuid DEFAULT uuid_generate_v1(),
  "category_id" uuid DEFAULT uuid_generate_v1(),
  "competition_id" uuid DEFAULT uuid_generate_v1(),
  "match_results" json DEFAULT NULL,
  "length" int2 DEFAULT NULL,
  "court" int2 DEFAULT NULL,
  "scheduled_end_time" varchar(6) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "referee_id" int4 NOT NULL DEFAULT NULL,
  "id" int8 NOT NULL DEFAULT nextval('matches_id_seq'::regclass),
  "match_status" int4 DEFAULT NULL,
  "winner_id" int8 DEFAULT NULL,
  "estimated_time" varchar(6) COLLATE "pg_catalog"."default" DEFAULT NULL
)
;
ALTER TABLE "matches" OWNER TO "postgres";
COMMENT ON COLUMN "matches"."scheduled_time" IS 'Scheduled date for a match (depends on session)';
COMMENT ON COLUMN "matches"."id" IS 'Scheduled date for a match (depends on session)';

-- ----------------------------
-- Records of matches
-- ----------------------------
BEGIN;
INSERT INTO "matches" VALUES (NULL, '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, '7682942d-a6a7-11e7-af65-0f7b7094575f', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', NULL, 30, 0, NULL, 3, 6, 5, NULL, NULL);
INSERT INTO "matches" VALUES (NULL, '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, '7682942d-a6a7-11e7-af65-0f7b7094575f', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":["3","7"],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":["30","-"],"tb":[0,0]}]', 30, 0, NULL, 4, 7, 5, NULL, NULL);
INSERT INTO "matches" VALUES (NULL, '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, 'e9b5070a-a7f0-11e7-99da-3be67149a706', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":["30","-"],"tb":[0,0]}]', 30, 0, NULL, 3, 9, 5, NULL, NULL);
INSERT INTO "matches" VALUES ('15:20', '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, '7682942d-a6a7-11e7-af65-0f7b7094575f', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]}]', 30, 11, '16:20', 4, 4, 6, NULL, '15:50');
INSERT INTO "matches" VALUES (NULL, '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, '7682942d-a6a7-11e7-af65-0f7b7094575f', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":["5","4"],"points":["Ad","-"],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":["Ad","-"],"tb":[0,0]}]', 30, 0, NULL, 4, 11, 5, NULL, NULL);
INSERT INTO "matches" VALUES (NULL, '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, '7682942d-a6a7-11e7-af65-0f7b7094575f', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]}]', 30, 0, NULL, 3, 8, 5, NULL, NULL);
INSERT INTO "matches" VALUES (NULL, '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, 'e71747ec-a7f0-11e7-99d9-e769f6a78cf6', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]}]', 30, 0, NULL, 3, 10, 5, NULL, NULL);
INSERT INTO "matches" VALUES ('15:25', '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, '7682942d-a6a7-11e7-af65-0f7b7094575f', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]}]', 30, 11, '15:45', 3, 5, 4, NULL, '15:15');
INSERT INTO "matches" VALUES ('15:00', '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, '7682942d-a6a7-11e7-af65-0f7b7094575f', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]}]', 30, 7, '15:45', 2, 2, 4, NULL, '15:15');
INSERT INTO "matches" VALUES ('14:55', '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, '7682942d-a6a7-11e7-af65-0f7b7094575f', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]}]', 30, 1, '15:25', 1, 1, 1, NULL, '14:55');
INSERT INTO "matches" VALUES ('15:30', '2017-10-01 19:52:27', '2017-10-01 00:00:00', NULL, 'f0061806-a7f0-11e7-99db-8f5ac629ff8c', '92939d9c-a6a6-11e7-9346-1f572eaa7f24', '766c365e-cecd-4a89-ad1a-d4edd324a5a8', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]},{"games":[0,0],"points":[0,0],"tb":[0,0]}]', 30, 8, '23:31', 3, 3, 2, NULL, '23:01');
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS "migrations";
CREATE TABLE "migrations" (
  "id" int4 NOT NULL DEFAULT nextval('migrations_id_seq'::regclass),
  "migration" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "batch" int4 NOT NULL DEFAULT NULL
)
;
ALTER TABLE "migrations" OWNER TO "postgres";

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO "migrations" VALUES (1, '2017_04_17_051111_create_tbl_organization', 1);
INSERT INTO "migrations" VALUES (2, '2017_04_17_075848_master_config_tables', 1);
INSERT INTO "migrations" VALUES (3, '2017_05_26_045055_create_users_table', 1);
COMMIT;

-- ----------------------------
-- Table structure for player_ranking
-- ----------------------------
DROP TABLE IF EXISTS "player_ranking";
CREATE TABLE "player_ranking" (
  "id" int4 NOT NULL DEFAULT NULL,
  "tournament" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "ranked" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "points" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "player_id" uuid DEFAULT NULL
)
;
ALTER TABLE "player_ranking" OWNER TO "postgres";

-- ----------------------------
-- Table structure for players
-- ----------------------------
DROP TABLE IF EXISTS "players";
CREATE TABLE "players" (
  "first_name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "last_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "email" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "password" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "date_of_birth" date DEFAULT NULL,
  "gender" varchar(6) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "photo" text COLLATE "pg_catalog"."default" DEFAULT NULL,
  "phone" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "phone_2" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "address" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "city" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "state" int2 NOT NULL DEFAULT nextval('players_state_seq'::regclass),
  "zip" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "code" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "club_id" int2 NOT NULL DEFAULT nextval('players_club_id_seq'::regclass),
  "created_date" timestamp(6) DEFAULT NULL,
  "id" int8 NOT NULL DEFAULT nextval('players_id_seq'::regclass)
)
;
ALTER TABLE "players" OWNER TO "postgres";

-- ----------------------------
-- Records of players
-- ----------------------------
BEGIN;
INSERT INTO "players" VALUES ('Saraz', 'Teslovich', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Female', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 10, '10006', '17', 2, '2017-10-02 00:00:00', 1);
INSERT INTO "players" VALUES ('Valentina', 'Berrotti', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Female', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 11, '10005', '10', 2, '2017-10-02 00:00:00', 2);
INSERT INTO "players" VALUES ('Ngoc', 'Minh', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Female', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 9, '10005', '18', 2, '2017-10-02 00:00:00', 3);
INSERT INTO "players" VALUES ('Novak', 'C', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Male', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 2, '10006', '17', 1, '2017-10-02 00:00:00', 4);
INSERT INTO "players" VALUES ('Lolina', 'Gomez', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Female', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 8, '10000', '13', 1, '2017-10-02 00:00:00', 5);
INSERT INTO "players" VALUES ('Robert', 'Abdesselam', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Male', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 1, '10002', '13', 3, '2017-10-02 00:00:00', 6);
INSERT INTO "players" VALUES ('Jack', 'Sock', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Male', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 5, '10006', '10', 3, '2017-10-02 00:00:00', 7);
INSERT INTO "players" VALUES ('Domonique', 'Thiem', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Male', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 4, '10000', '13', 3, '2017-10-02 00:00:00', 8);
INSERT INTO "players" VALUES ('David', 'Gottio', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Male', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 3, '10008', '12', 2, '2017-10-02 00:00:00', 9);
INSERT INTO "players" VALUES ('Stan', 'Wawrinka', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Male', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 6, '10002', '13', 2, '2017-10-02 00:00:00', 10);
INSERT INTO "players" VALUES ('Lucas', 'Poulie', 'test@gkxim.com', '269811301920b61d51cc34908d6b4621', '1987-08-10', 'Female', 'http://lorempixel.com/200/200/people/', '123456789', '987654321', NULL, 'test city', 7, '10008', '16', 2, '2017-10-02 00:00:00', 11);
COMMIT;

-- ----------------------------
-- Table structure for referees
-- ----------------------------
DROP TABLE IF EXISTS "referees";
CREATE TABLE "referees" (
  "id" int2 NOT NULL DEFAULT nextval('referees_id_seq'::regclass),
  "first_name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "last_name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL
)
;
ALTER TABLE "referees" OWNER TO "postgres";

-- ----------------------------
-- Records of referees
-- ----------------------------
BEGIN;
INSERT INTO "referees" VALUES (1, 'Jonny', 'Still');
INSERT INTO "referees" VALUES (2, 'Thinh', 'Pham');
INSERT INTO "referees" VALUES (3, 'Test1', 'GKIM');
INSERT INTO "referees" VALUES (4, 'Test2', 'GKIM');
INSERT INTO "referees" VALUES (5, 'Test3', 'GKIM');
COMMIT;

-- ----------------------------
-- Table structure for session_referees
-- ----------------------------
DROP TABLE IF EXISTS "session_referees";
CREATE TABLE "session_referees" (
  "id" int2 NOT NULL DEFAULT nextval('session_referees_id_seq'::regclass),
  "session_id" uuid DEFAULT NULL,
  "referee_id" int2 DEFAULT NULL
)
;
ALTER TABLE "session_referees" OWNER TO "postgres";

-- ----------------------------
-- Records of session_referees
-- ----------------------------
BEGIN;
INSERT INTO "session_referees" VALUES (1, '92939d9c-a6a6-11e7-9346-1f572eaa7f24', 1);
INSERT INTO "session_referees" VALUES (2, '92939d9c-a6a6-11e7-9346-1f572eaa7f24', 2);
INSERT INTO "session_referees" VALUES (3, '92939d9c-a6a6-11e7-9346-1f572eaa7f24', 3);
INSERT INTO "session_referees" VALUES (4, '92939d9c-a6a6-11e7-9346-1f572eaa7f24', 4);
INSERT INTO "session_referees" VALUES (5, '92939d9c-a6a6-11e7-9346-1f572eaa7f24', 5);
COMMIT;

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS "sessions";
CREATE TABLE "sessions" (
  "id" uuid NOT NULL DEFAULT uuid_generate_v1(),
  "name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "organized_date" timestamp(6) DEFAULT NULL,
  "category_id" uuid NOT NULL DEFAULT uuid_generate_v1(),
  "competition_id" uuid NOT NULL DEFAULT uuid_generate_v1(),
  "court" json DEFAULT NULL,
  "start_time" varchar(10) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "end_time" varchar(10) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "disabled_courts" json DEFAULT NULL
)
;
ALTER TABLE "sessions" OWNER TO "postgres";

-- ----------------------------
-- Records of sessions
-- ----------------------------
BEGIN;
INSERT INTO "sessions" VALUES ('92939d9c-a6a6-11e7-9346-1f572eaa7f24', 'Session 1', '2017-10-03 19:32:23', '9294fd2c-a6a6-11e7-9347-ffd8cc99a5ec', '9295243c-a6a6-11e7-9348-db91331b95b2', '[{"content":"Court 1","id":1,"value":1,"statusReady":true,"available":true},{"content":"Court 2","id":2,"value":2,"statusReady":false,"available":false},{"content":"Court 3","id":3,"value":3,"statusReady":true,"available":true},{"content":"Court 4","id":4,"value":4,"statusReady":false,"available":false},{"content":"Court 5","id":5,"value":5,"statusReady":false,"available":false},{"content":"Court 6","id":6,"value":6,"statusReady":false,"available":false},{"content":"Court 7","id":7,"value":7,"statusReady":true,"available":true},{"content":"Court 8","id":8,"value":8,"statusReady":true,"available":true},{"content":"Court 9","id":9,"value":9,"statusReady":true,"available":true},{"content":"Court 10","id":10,"value":10,"statusReady":true,"available":true},{"content":"Court 11","id":11,"value":11,"statusReady":true,"available":true},{"content":"Court 12","id":12,"value":12,"statusReady":true,"available":true},{"content":"Court 13","id":13,"value":13,"statusReady":true,"available":true},{"content":"Court 15","id":14,"value":14,"statusReady":true,"available":true}]', '8:00', '16:00', NULL);
COMMIT;

-- ----------------------------
-- Table structure for team_matches
-- ----------------------------
DROP TABLE IF EXISTS "team_matches";
CREATE TABLE "team_matches" (
  "team_status" varchar(20) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "id" int8 NOT NULL DEFAULT nextval('team_matches_id_seq'::regclass),
  "team_id" int8 DEFAULT NULL,
  "match_id" int8 DEFAULT NULL
)
;
ALTER TABLE "team_matches" OWNER TO "postgres";

-- ----------------------------
-- Records of team_matches
-- ----------------------------
BEGIN;
INSERT INTO "team_matches" VALUES ('1', 9, 9, 5);
INSERT INTO "team_matches" VALUES ('1', 10, 10, 5);
INSERT INTO "team_matches" VALUES ('1', 2, 2, 1);
INSERT INTO "team_matches" VALUES ('1', 1, 1, 1);
INSERT INTO "team_matches" VALUES ('1', 3, 3, 2);
INSERT INTO "team_matches" VALUES ('1', 4, 4, 2);
INSERT INTO "team_matches" VALUES ('0', 7, 7, 4);
INSERT INTO "team_matches" VALUES ('0', 8, 8, 4);
INSERT INTO "team_matches" VALUES ('1', 6, 6, 3);
INSERT INTO "team_matches" VALUES ('1', 5, 5, 3);
COMMIT;

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS "teams";
CREATE TABLE "teams" (
  "name" varchar(255) COLLATE "pg_catalog"."default" DEFAULT NULL,
  "category_id" uuid NOT NULL DEFAULT NULL,
  "competition_id" uuid DEFAULT NULL,
  "members" json DEFAULT NULL,
  "paid" int2 DEFAULT NULL,
  "id" int8 NOT NULL DEFAULT nextval('teams_id_seq'::regclass)
)
;
ALTER TABLE "teams" OWNER TO "postgres";

-- ----------------------------
-- Records of teams
-- ----------------------------
BEGIN;
INSERT INTO "teams" VALUES ('Ngoc Minh', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":3,"player_name":"Ngoc Minh"}]', 1, 3);
INSERT INTO "teams" VALUES ('Robert Abdesselam', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":6,"player_name":"Robert Abdesselam"}]', 0, 4);
INSERT INTO "teams" VALUES ('Valentina Berrotti', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":2,"player_name":"Valentina Berrotti"}]', 1, 5);
INSERT INTO "teams" VALUES ('Jack Sock', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":7,"player_name":"Jack Sock"}]', 0, 6);
INSERT INTO "teams" VALUES ('Novak C', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":4,"player_name":"Novak C"}]', 0, 7);
INSERT INTO "teams" VALUES ('David Gottio', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":9,"player_name":"David Gottio"}]', 1, 8);
INSERT INTO "teams" VALUES ('Saraz Teslovich', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":1,"player_name":"Saraz Teslovich"}]', 1, 9);
INSERT INTO "teams" VALUES ('Lolina Gomez', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":5,"player_name":"Lolina Gomez"}]', 1, 10);
INSERT INTO "teams" VALUES ('Stan Wawrinka', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":10,"player_name":"Stan Wawrinka"}]', 1, 11);
INSERT INTO "teams" VALUES ('Domonique Thiem', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id": 8,"player_name":"Domonique Thiem"}]', 0, 1);
INSERT INTO "teams" VALUES ('Lucas Poulie', '7682bb3c-a6a7-11e7-af67-53dde1ad72c6', '7682bb3d-a6a7-11e7-af68-d3b299137172', '[{"player_id":11,"player_name":"Lucas Poulie"}]', 1, 2);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "users";
CREATE TABLE "users" (
  "id" uuid NOT NULL DEFAULT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "username" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "remember_token" varchar(255) COLLATE "pg_catalog"."default" NOT NULL DEFAULT NULL,
  "created_at" timestamp(0) DEFAULT NULL,
  "updated_at" timestamp(0) DEFAULT NULL
)
;
ALTER TABLE "users" OWNER TO "postgres";

-- ----------------------------
-- Function structure for uuid_generate_v1
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_generate_v1"();
CREATE OR REPLACE FUNCTION "uuid_generate_v1"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v1'
  LANGUAGE c VOLATILE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_generate_v1mc
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_generate_v1mc"();
CREATE OR REPLACE FUNCTION "uuid_generate_v1mc"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v1mc'
  LANGUAGE c VOLATILE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_generate_v3
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_generate_v3"("namespace" uuid, "name" text);
CREATE OR REPLACE FUNCTION "uuid_generate_v3"("namespace" uuid, "name" text)
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v3'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_generate_v4
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_generate_v4"();
CREATE OR REPLACE FUNCTION "uuid_generate_v4"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v4'
  LANGUAGE c VOLATILE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_generate_v5
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_generate_v5"("namespace" uuid, "name" text);
CREATE OR REPLACE FUNCTION "uuid_generate_v5"("namespace" uuid, "name" text)
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_generate_v5'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_nil
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_nil"();
CREATE OR REPLACE FUNCTION "uuid_nil"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_nil'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_ns_dns
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_ns_dns"();
CREATE OR REPLACE FUNCTION "uuid_ns_dns"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_ns_dns'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_ns_oid
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_ns_oid"();
CREATE OR REPLACE FUNCTION "uuid_ns_oid"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_ns_oid'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_ns_url
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_ns_url"();
CREATE OR REPLACE FUNCTION "uuid_ns_url"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_ns_url'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Function structure for uuid_ns_x500
-- ----------------------------
DROP FUNCTION IF EXISTS "uuid_ns_x500"();
CREATE OR REPLACE FUNCTION "uuid_ns_x500"()
  RETURNS "pg_catalog"."uuid" AS '$libdir/uuid-ossp', 'uuid_ns_x500'
  LANGUAGE c IMMUTABLE STRICT
  COST 1;

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "countries_id_seq"
OWNED BY "countries"."id";
SELECT setval('"countries_id_seq"', 480, true);
ALTER SEQUENCE "match_status_id_seq"
OWNED BY "match_status"."id";
SELECT setval('"match_status_id_seq"', 13, true);
ALTER SEQUENCE "matches_id_seq"
OWNED BY "matches"."id";
SELECT setval('"matches_id_seq"', 15, true);
ALTER SEQUENCE "migrations_id_seq"
OWNED BY "migrations"."id";
SELECT setval('"migrations_id_seq"', 5, true);
ALTER SEQUENCE "players_club_id_seq"
OWNED BY "players"."club_id";
SELECT setval('"players_club_id_seq"', 13, true);
ALTER SEQUENCE "players_id_seq"
OWNED BY "players"."id";
SELECT setval('"players_id_seq"', 13, true);
ALTER SEQUENCE "players_state_seq"
OWNED BY "players"."state";
SELECT setval('"players_state_seq"', 13, true);
ALTER SEQUENCE "referees_id_seq"
OWNED BY "referees"."id";
SELECT setval('"referees_id_seq"', 7, true);
ALTER SEQUENCE "session_referees_id_seq"
OWNED BY "session_referees"."id";
SELECT setval('"session_referees_id_seq"', 7, true);
ALTER SEQUENCE "team_matches_id_seq"
OWNED BY "team_matches"."id";
SELECT setval('"team_matches_id_seq"', 12, true);
ALTER SEQUENCE "teams_id_seq"
OWNED BY "teams"."id";
SELECT setval('"teams_id_seq"', 13, true);

-- ----------------------------
-- Primary Key structure for table categories
-- ----------------------------
ALTER TABLE "categories" ADD CONSTRAINT "categories_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table clubs
-- ----------------------------
ALTER TABLE "clubs" ADD CONSTRAINT "club_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table countries
-- ----------------------------
ALTER TABLE "countries" ADD CONSTRAINT "countries_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table migrations
-- ----------------------------
ALTER TABLE "migrations" ADD CONSTRAINT "migrations_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table players
-- ----------------------------
ALTER TABLE "players" ADD CONSTRAINT "players_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table team_matches
-- ----------------------------
ALTER TABLE "team_matches" ADD CONSTRAINT "team_matches_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table teams
-- ----------------------------
ALTER TABLE "teams" ADD CONSTRAINT "teams_pkey" PRIMARY KEY ("id");
