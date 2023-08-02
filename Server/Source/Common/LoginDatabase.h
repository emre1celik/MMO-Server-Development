#ifndef LOGIN_DATABASE_H
#define LOGIN_DATABASE_H

enum MuLoginDatabaseStatements
{
	/* GAMESERVER */
	QUERY_LOGIN_GAMESERVER,
	QUERY_LOGIN_GAMESERVER_SELECT,

	/* ACCOUNTS */
	QUERY_LOGIN_ACCOUNT_LOGIN,
	QUERY_LOGIN_ACCOUNT_STATUS_DELETE,
	QUERY_LOGIN_ACCOUNT_STATUS_UPDATE,
	QUERY_LOGIN_ACCOUNT_BLOCK,

	QUERY_LOGIN_ACCOUNT_CLEAN,

	QUERY_LOGIN_ACCOUNT_TYPE_UPDATE,
	
	/* ITEM SERIAL */
	QUERY_LOGIN_ITEM_SERIAL_SELECT,
	QUERY_LOGIN_ITEM_SERIAL_UPDATE,

	/* ACCOUNTS SECURITY */
	QUERY_LOGIN_ACCOUNT_SECURITY_DELETE,
	QUERY_LOGIN_ACCOUNT_SECURITY_INSERT,

	/* CHARACTER NOTIFICATION */
	QUERY_LOGIN_CHARACTER_NOTIFICATION,

	QUERY_LOGIN_ACCOUNTS_DISCONNECT_SELECT,
	QUERY_LOGIN_ACCOUNTS_DISCONNECT_DELETE,

	QUERY_LOGIN_BLOCK_MAC_SELECT,
	QUERY_LOGIN_BLOCK_DISK_SERIAL_SELECT,
	QUERY_LOGIN_BLOCK_IP_SELECT,

	QUERY_LOGIN_COMPLETE_BAN_ACCOUNT_1,
	QUERY_LOGIN_COMPLETE_BAN_ACCOUNT_2,
	QUERY_LOGIN_COMPLETE_BAN_ACCOUNT_3,

	QUERY_LOGIN_COMPLETE_BAN_INSERT_1,
	QUERY_LOGIN_COMPLETE_BAN_INSERT_2,
	QUERY_LOGIN_COMPLETE_BAN_INSERT_3,

	//QUERY_LOGIN_WHITE_LIST_SELECT,

	QUERY_LOGIN_ACCOUNTS_VALIDATION_INSERT,
	QUERY_LOGIN_ACCOUNTS_WARNING_INSERT,
	QUERY_LOGIN_ACCOUNTS_WARNING_DELETE,

	QUERY_LOGIN_GOLDEN_CHANNEL_SELECT,
	QUERY_LOGIN_GOLDEN_CHANNEL_UPDATE,

	QUERY_LOGIN_ACCOUNTS_STATUS_COUNT_SELECT,

	//QUERY_LOGIN_MASTER_PC,

	MAX_LOGIN_STATEMENTS
};

class LoginDatabaseConnection : public MySQLConnection
{
    public:
		typedef MuLoginDatabaseStatements Statements;

        //- Constructors for sync and async connections
        LoginDatabaseConnection(MySQLConnectionInfo& connInfo) : MySQLConnection(connInfo) { }
        LoginDatabaseConnection(ProducerConsumerQueue<SQLOperation*>* q, MySQLConnectionInfo& connInfo) : MySQLConnection(q, connInfo) { }

        //- Loads database type specific prepared statements
        void DoPrepareStatements() override;
};

typedef DatabaseWorkerPool<LoginDatabaseConnection> LoginDatabaseWorkerPool;

#endif