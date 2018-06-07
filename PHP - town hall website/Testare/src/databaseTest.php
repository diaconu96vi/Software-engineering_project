<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

abstract class Generic_Tests_DatabaseTestCase extends TestCase
{
    use TestCaseTrait;
	<var name="DB_DSN" value="mysql:dbname=tbl_users;host=localhost" />
    <var name="DB_USER" value="user" />
	<var name="DB_PASSWD" value="" />
	<var name="DB_DBNAME" value="tbl_users" />

    // only instantiate pdo once for test clean-up/fixture load
    static private $pdo = null;

    // only instantiate PHPUnit\DbUnit\Database\Connection once per test
    private $conn = null;

    final public function getConnection()
    {
        if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO( $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD'] );
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, $GLOBALS['DB_DBNAME']);
        }

        return $this->conn;
    }
	public function getTable($tableName)
    {
        if (!isset($this->tables[$tableName])) {
            throw new InvalidArgumentException("$tableName is not a table in the current database.");
        }

        return $this->tables[$tableName];
    }
	protected function getDataSet()
    {
        return new MyApp_DbUnit_ArrayDataSet(
            [
                'tbl_users' => [
                    [
                        'id' => 1,
                        'user' => 'alin',
                        'email' => 'alin.96@gmail.com',
                        'created' => '2018-06-02 17:15:23'
                    ],
                    [
                        'id' => 2,
                        'user' => 'dan',
                        'email' => dan.96@gmail.com,
                        'created' => '2018-06-03 12:14:20'
                    ],
                ],
            ]
        );
    }
	public function testAddEntry()
    {
        $tbl_users = new tbl_users();
        $tbl_users->addEntry("suzy", "Hello world!");

        $queryTable = $this->getConnection()->createQueryTable(
            'tbl_users', 'SELECT * FROM tbl_users'
        );
        $expectedTable = $this->createFlatXmlDataSet("expectedBook.xml")
                              ->getTable("tbl_users");
        $this->assertTablesEqual($expectedTable, $queryTable);
    }
}