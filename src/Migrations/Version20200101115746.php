<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200101115746 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE order_detail CHANGE id_order_id id_order_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wishlist CHANGE id_client_id id_client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE address CHANGE id_client_id id_client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD featured_image INT DEFAULT NULL, DROP featured_image_id, CHANGE brand_product brand_product VARCHAR(60) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE image_product image_product VARCHAR(255) DEFAULT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT NULL, CHANGE meta_keywords_product meta_keywords_product VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin CHANGE image_admin image_admin VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE image CHANGE product_id product_id INT DEFAULT NULL, CHANGE url url VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(80) DEFAULT NULL');
        $this->addSql('ALTER TABLE `order` CHANGE id_client_id id_client_id INT DEFAULT NULL, CHANGE id_address_id id_address_id INT DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE category CHANGE icon_category icon_category VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT NULL, CHANGE meta_keywords meta_keywords VARCHAR(255) DEFAULT NULL, CHANGE slug_category slug_category VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE address CHANGE id_client_id id_client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin CHANGE image_admin image_admin VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE category CHANGE icon_category icon_category VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE is_active is_active TINYINT(1) DEFAULT \'NULL\', CHANGE meta_keywords meta_keywords VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE slug_category slug_category VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE image CHANGE product_id product_id INT DEFAULT NULL, CHANGE url url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE `order` CHANGE id_client_id id_client_id INT DEFAULT NULL, CHANGE id_address_id id_address_id INT DEFAULT NULL, CHANGE status status VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE order_detail CHANGE id_order_id id_order_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD featured_image_id INT DEFAULT NULL, DROP featured_image, CHANGE brand_product brand_product VARCHAR(60) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE image_product image_product VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE is_active is_active TINYINT(1) DEFAULT \'NULL\', CHANGE meta_keywords_product meta_keywords_product VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE wishlist CHANGE id_client_id id_client_id INT DEFAULT NULL');
    }
}
