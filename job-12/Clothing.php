<?php
require_once "Product.php";
class Clothing extends Product
{
    protected ?PDO $pdo;
    // size, color, type, material_fee
    public function __construct(
        protected ?int $id = null,
        protected ?string $name = null,
        protected ?array $photos = null,
        protected ?int $price = null,
        protected ?string $description = null,
        protected ?int $quantity = null,
        protected ?DateTime $createdAt = null,
        protected ?DateTime $updatedAt = null,
        protected ?int $id_category = null,
        protected ?string $size = null,
        protected ?string $color = null,
        protected ?string $type = null,
        protected ?int $materialFee = null
    ) {
        parent::__construct($id, $name, $photos, $price, $description, $quantity, $createdAt, $updatedAt, $id_category);
    }

    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of materialFee
     */
    public function getMaterialFee()
    {
        return $this->materialFee;
    }

    /**
     * Set the value of materialFee
     *
     * @return  self
     */
    public function setMaterialFee($materialFee)
    {
        $this->materialFee = $materialFee;

        return $this;
    }

    // ////////////////////////
    public function findOneById(int $id): Clothing|bool
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM clothing INNER JOIN product ON clothing.id_product = product.id WHERE id_product = :id"
        );
        $query->execute([
            "id" => $id
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $clothing = new Clothing(
                $result['id'],
                $result['name'],
                json_decode($result['photos']),
                $result['price'],
                $result['description'],
                $result['quantity'],
                new DateTime($result['createdAt']),
                new DateTime($result['updatedAt']),
                $result['id_category'],
                $result['size'],
                $result['color'],
                $result['type'],
                $result['material_fee']
            );
            return $clothing;
        } else {
            return false;
        }
    }

    public function findAll(): array
    {
        $query = $this->pdo->prepare("SELECT * FROM clothing INNER JOIN product ON clothing.id_product = product.id");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $clothings = [];
        foreach ($result as $clothing) {
            $clothings[] = new Clothing(
                $clothing['id'],
                $clothing['name'],
                json_decode($clothing['photos']),
                $clothing['price'],
                $clothing['description'],
                $clothing['quantity'],
                new DateTime($clothing['createdAt']),
                new DateTime($clothing['updatedAt']),
                $clothing['id_category'],
                $clothing['size'],
                $clothing['color'],
                $clothing['type'],
                $clothing['material_fee']
            );
        }
        return $clothings;
    }
}
