<?php

/*
 * Auto-generated by libasynql-fx
 * Created from init.sql, transaction.sql, account.sql, init.sql, transaction.sql, account.sql
 */

declare(strict_types=1);

namespace SOFe\Capital\Database;

use Generator;
use poggit\libasynql\DataConnector;
use SOFe\AwaitGenerator\Await;

final class RawQueries{
    public function __construct(private DataConnector $conn) {}

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:8
     * - resources/sqlite/account.sql:8
     * @param string $id
     * @param int $value
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function accountCreate(string $id, int $value, ) : Generator {
        $this->conn->executeInsert("capital.account.create", ["id" => $id, "value" => $value, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:16
     * - resources/sqlite/account.sql:23
     * @param string $id
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function accountFetch(string $id, ) : Generator {
        $this->conn->executeSelect("capital.account.fetch", ["id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:20
     * - resources/sqlite/account.sql:27
     * @param string[] $ids
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function accountFetchList(array $ids, ) : Generator {
        $this->conn->executeSelect("capital.account.fetch_list", ["ids" => $ids, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:27
     * - resources/sqlite/account.sql:34
     * @param string $id
     * @param string $name
     * @param string $value
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function accountLabelAdd(string $id, string $name, string $value, ) : Generator {
        $this->conn->executeInsert("capital.account.label.add", ["id" => $id, "name" => $name, "value" => $value, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:40
     * - resources/sqlite/account.sql:46
     * @param string $id
     * @param string $name
     * @param string $value
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function accountLabelAddOrUpdate(string $id, string $name, string $value, ) : Generator {
        $this->conn->executeInsert("capital.account.label.add_or_update", ["id" => $id, "name" => $name, "value" => $value, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:45
     * - resources/sqlite/account.sql:51
     * @param string $id
     * @param string $name
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function accountLabelFetch(string $id, string $name, ) : Generator {
        $this->conn->executeSelect("capital.account.label.fetch", ["id" => $id, "name" => $name, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:49
     * - resources/sqlite/account.sql:55
     * @param string $id
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function accountLabelFetchAll(string $id, ) : Generator {
        $this->conn->executeSelect("capital.account.label.fetch_all", ["id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:53
     * - resources/sqlite/account.sql:59
     * @param string[] $ids
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function accountLabelFetchAllMulti(array $ids, ) : Generator {
        $this->conn->executeSelect("capital.account.label.fetch_all_multi", ["ids" => $ids, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:33
     * - resources/sqlite/account.sql:40
     * @param string $id
     * @param string $name
     * @param string $value
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function accountLabelUpdate(string $id, string $name, string $value, ) : Generator {
        $this->conn->executeChange("capital.account.label.update", ["id" => $id, "name" => $name, "value" => $value, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/sqlite/account.sql:18
     * @param string $id
     * @param int $delta
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function accountSqliteUnsafeDelta(string $id, int $delta, ) : Generator {
        $this->conn->executeChange("capital.account.sqlite.unsafe.delta", ["id" => $id, "delta" => $delta, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/account.sql:12
     * - resources/sqlite/account.sql:12
     * @param string $id
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function accountTouch(string $id, ) : Generator {
        $this->conn->executeChange("capital.account.touch", ["id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/init.sql:80
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function initMysqlProceduresTranCreate() : Generator {
        $this->conn->executeChange("capital.init.mysql.procedures.tran_create", [], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/init.sql:117
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function initMysqlProceduresTranCreate2() : Generator {
        $this->conn->executeChange("capital.init.mysql.procedures.tran_create_2", [], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/init.sql:45
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function initMysqlTables() : Generator {
        $this->conn->executeChange("capital.init.mysql.tables", [], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/sqlite/init.sql:47
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function initSqlite() : Generator {
        $this->conn->executeChange("capital.init.sqlite", [], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/transaction.sql:18
     * @param string $id
     * @param string $src
     * @param string $dest
     * @param int $delta
     * @param int $src_min
     * @param int $dest_max
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function transactionCreate(string $id, string $src, string $dest, int $delta, int $src_min, int $dest_max, ) : Generator {
        $this->conn->executeSelect("capital.transaction.create", ["id" => $id, "src" => $src, "dest" => $dest, "delta" => $delta, "src_min" => $src_min, "dest_max" => $dest_max, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/transaction.sql:39
     * @param string $id1
     * @param string $src1
     * @param string $dest1
     * @param int $delta1
     * @param int $src_min1
     * @param int $dest_max1
     * @param string $id2
     * @param string $src2
     * @param string $dest2
     * @param int $delta2
     * @param int $src_min2
     * @param int $dest_max2
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function transactionCreate2(string $id1, string $src1, string $dest1, int $delta1, int $src_min1, int $dest_max1, string $id2, string $src2, string $dest2, int $delta2, int $src_min2, int $dest_max2, ) : Generator {
        $this->conn->executeSelect("capital.transaction.create2", ["id1" => $id1, "src1" => $src1, "dest1" => $dest1, "delta1" => $delta1, "src_min1" => $src_min1, "dest_max1" => $dest_max1, "id2" => $id2, "src2" => $src2, "dest2" => $dest2, "delta2" => $delta2, "src_min2" => $src_min2, "dest_max2" => $dest_max2, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/sqlite/transaction.sql:10
     * @param string $id
     * @param string $src
     * @param string $dest
     * @param int $delta
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function transactionInsert(string $id, string $src, string $dest, int $delta, ) : Generator {
        $this->conn->executeInsert("capital.transaction.insert", ["id" => $id, "src" => $src, "dest" => $dest, "delta" => $delta, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/transaction.sql:46
     * - resources/sqlite/transaction.sql:17
     * @param string $id
     * @param string $name
     * @param string $value
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function transactionLabelAdd(string $id, string $name, string $value, ) : Generator {
        $this->conn->executeInsert("capital.transaction.label.add", ["id" => $id, "name" => $name, "value" => $value, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/transaction.sql:59
     * - resources/sqlite/transaction.sql:29
     * @param string $id
     * @param string $name
     * @param string $value
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function transactionLabelAddOrUpdate(string $id, string $name, string $value, ) : Generator {
        $this->conn->executeInsert("capital.transaction.label.add_or_update", ["id" => $id, "name" => $name, "value" => $value, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/transaction.sql:64
     * - resources/sqlite/transaction.sql:34
     * @param string $id
     * @param string $name
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function transactionLabelFetch(string $id, string $name, ) : Generator {
        $this->conn->executeSelect("capital.transaction.label.fetch", ["id" => $id, "name" => $name, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/transaction.sql:68
     * - resources/sqlite/transaction.sql:38
     * @param string $id
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function transactionLabelFetchAll(string $id, ) : Generator {
        $this->conn->executeSelect("capital.transaction.label.fetch_all", ["id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/transaction.sql:72
     * - resources/sqlite/transaction.sql:42
     * @param string[] $ids
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
     */
    public function transactionLabelFetchAllMulti(array $ids, ) : Generator {
        $this->conn->executeSelect("capital.transaction.label.fetch_all_multi", ["ids" => $ids, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }

    /**
     * <h4>Declared in:</h4>
     * - resources/mysql/transaction.sql:52
     * - resources/sqlite/transaction.sql:23
     * @param string $id
     * @param string $name
     * @param string $value
     * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
     */
    public function transactionLabelUpdate(string $id, string $name, string $value, ) : Generator {
        $this->conn->executeChange("capital.transaction.label.update", ["id" => $id, "name" => $name, "value" => $value, ], yield Await::RESOLVE, yield Await::REJECT);
        return yield Await::ONCE;
    }
}
