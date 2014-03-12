<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140221131258 extends AbstractMigration {

    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");

        $this->addSql("CREATE TABLE activity (id INT AUTO_INCREMENT NOT NULL, team_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, INDEX IDX_AC74095A296CD8AE (team_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE data (id INT AUTO_INCREMENT NOT NULL, line_id INT DEFAULT NULL, date DATETIME DEFAULT NULL, hours INT DEFAULT NULL, INDEX IDX_ADF3F3634D7B7542 (line_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE line (id INT AUTO_INCREMENT NOT NULL, project_id INT DEFAULT NULL, task_type_id INT DEFAULT NULL, user_id INT DEFAULT NULL, line_type_id INT DEFAULT NULL, created_on DATETIME NOT NULL, INDEX IDX_D114B4F6166D1F9C (project_id), INDEX IDX_D114B4F6DAADA679 (task_type_id), INDEX IDX_D114B4F6A76ED395 (user_id), INDEX IDX_D114B4F670E80DF4 (line_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE line_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_793A4F05E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, active TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_2FB3D0EE5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE task_type (id INT AUTO_INCREMENT NOT NULL, activity_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, INDEX IDX_FF6DC35281C06096 (activity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_C4E0A61F5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE fos_user (id INT AUTO_INCREMENT NOT NULL, team_id INT DEFAULT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT '(DC2Type:array)', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_957A647992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_957A6479A0D96FBF (email_canonical), INDEX IDX_957A6479296CD8AE (team_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE activity ADD CONSTRAINT FK_AC74095A296CD8AE FOREIGN KEY (team_id) REFERENCES team (id)");
        $this->addSql("ALTER TABLE data ADD CONSTRAINT FK_ADF3F3634D7B7542 FOREIGN KEY (line_id) REFERENCES line (id)");
        $this->addSql("ALTER TABLE line ADD CONSTRAINT FK_D114B4F6166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)");
        $this->addSql("ALTER TABLE line ADD CONSTRAINT FK_D114B4F6DAADA679 FOREIGN KEY (task_type_id) REFERENCES task_type (id)");
        $this->addSql("ALTER TABLE line ADD CONSTRAINT FK_D114B4F6A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id)");
        $this->addSql("ALTER TABLE line ADD CONSTRAINT FK_D114B4F670E80DF4 FOREIGN KEY (line_type_id) REFERENCES line_type (id)");
        $this->addSql("ALTER TABLE task_type ADD CONSTRAINT FK_FF6DC35281C06096 FOREIGN KEY (activity_id) REFERENCES activity (id)");
        $this->addSql("ALTER TABLE fos_user ADD CONSTRAINT FK_957A6479296CD8AE FOREIGN KEY (team_id) REFERENCES team (id)");
    }

    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");

        $this->addSql("ALTER TABLE task_type DROP FOREIGN KEY FK_FF6DC35281C06096");
        $this->addSql("ALTER TABLE data DROP FOREIGN KEY FK_ADF3F3634D7B7542");
        $this->addSql("ALTER TABLE line DROP FOREIGN KEY FK_D114B4F670E80DF4");
        $this->addSql("ALTER TABLE line DROP FOREIGN KEY FK_D114B4F6166D1F9C");
        $this->addSql("ALTER TABLE line DROP FOREIGN KEY FK_D114B4F6DAADA679");
        $this->addSql("ALTER TABLE activity DROP FOREIGN KEY FK_AC74095A296CD8AE");
        $this->addSql("ALTER TABLE fos_user DROP FOREIGN KEY FK_957A6479296CD8AE");
        $this->addSql("ALTER TABLE line DROP FOREIGN KEY FK_D114B4F6A76ED395");
        $this->addSql("DROP TABLE activity");
        $this->addSql("DROP TABLE data");
        $this->addSql("DROP TABLE line");
        $this->addSql("DROP TABLE line_type");
        $this->addSql("DROP TABLE project");
        $this->addSql("DROP TABLE task_type");
        $this->addSql("DROP TABLE team");
        $this->addSql("DROP TABLE fos_user");
    }

}
