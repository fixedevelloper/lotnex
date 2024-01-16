<?php


namespace App\Services;


use Web3\Contract;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Web3;

class Web3Service
{
    protected $web3;

    protected $contract;
    protected $abi;

    /**
     * Web3Service constructor.
     */
    public function __construct()
    {
        $this->abi = file_get_contents(public_path('contractjs/contract.json'));
        //$this->web3 = new Web3(new HttpProvider(new HttpRequestManager(env('APP_URL'), 0.1)));
          $this->web3=new Web3(new HttpProvider(new HttpRequestManager(env('BSCAN_URL'))));
        $this->contract = new Contract($this->web3->getProvider(), $this->abi);
    }

    public function AddressToID($address)
    {
        //logger($this->abi);
        $this->contract->at(env('INFINIX_ADDRESS'))->call('userIDs', $address, function ($err, $result) {
            logger($err);
        });
        $res = $this->web3->executeBatch();
    }

    public function IDToAddress($id)
    {
        $accounts=$this->web3->getEth()->accounts;
        $eth=$this->web3->getEth();
        $this->web3->getEth()->accounts(function ($err, $accounts) use ($eth) {
            if ($err !== null) {
                echo 'Error: ' . $err->getMessage();
                return;
            }
            foreach ($accounts as $account) {
                echo 'Account: ' . $account . PHP_EOL;
                logger($account);
                $eth->getBalance($account, function ($err, $balance) {
                    if ($err !== null) {
                        echo 'Error: ' . $err->getMessage();
                        return;
                    }
                    echo 'Balance: ' . $balance . PHP_EOL;
                });
            }
        });

    }
}
