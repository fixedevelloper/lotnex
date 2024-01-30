var lottery = function () {
    'use strict';
    const initialiseABI = function () {
        const contractAddress="0xdF1273A5e3372701B97A1580dD856FeF00deF7EB"
        const abi=[{"inputs":[{"internalType":"address","name":"AdminAddress","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"inputs":[],"name":"Admin","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address payable","name":"_To","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"CheckBalance","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address[]","name":"winners","type":"address[]"},{"internalType":"uint256[]","name":"amounts","type":"uint256[]"}],"name":"DistributeEarnings","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"GetRefferalRewards","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"GetTotalDeposit","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"GettotalAmountReceive","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"IdToAdresss","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"IsUserRegistered","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"NumberOfUsers","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"referrerUser","type":"address"}],"name":"Registration","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"Userid","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"Users","outputs":[{"internalType":"uint256","name":"id","type":"uint256"},{"internalType":"address","name":"userAddress","type":"address"},{"internalType":"address","name":"referrer","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"Verification","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"deposit","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getTotalReferrals","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"isOwner","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"participation","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"referralRewards","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"uint256","name":"","type":"uint256"}],"name":"referrals","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"referrer","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"newfees","type":"uint256"}],"name":"setParticipation","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"totalAmountReceive","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"totalDeposit","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}]
        var balance_MAIN = "4000000000000000";
        const contract = new web3.eth.Contract(abi, contractAddress)
        return {
            'address':contractAddress,
            'abi':abi,
            'balance_MAIN':balance_MAIN,
            'contract':contract
        }
    };
    const getAccount= async function(){
        const accounts = await window.web3.eth.getAccounts();
        return accounts[0];
    };
    const initialiseEtheruim = async function () {
        if (window.ethereum) {
            window.web3 = new Web3(ethereum);
            try {
                /*await ethereum.request({
                    method: 'eth_requestAccounts'
                });*/
                var networkid = await web3.eth.net.getId()
                if (networkid !== 56) {
                    alert('Connect to BNB Mainnet Network');
                } else {
                    var id_user = $('#id_user_smart').text();
                }
        console.log(networkid)
            } catch (error) {
                $('#spinner_dashboard').hide()
                alert('Error: Out of Gas: please reload this page')
                console.log(error)
            }
        } else if (window.web3) {
            window.web3 = new Web3(web3.currentProvider);
            web3.eth.sendTransaction({/* ... */});
        } else {
            alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');

        }
    };
    const initialiseContract=async function(){
        var account= await lottery.getAccount()
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
        var balance = await window.mxgfcontract.methods.idToAddress(account).call();
    };
    const register=async function(){
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
    };
    const login=async function(){
        var account= await lottery.getAccount()
        console.log(account)
       /* $.ajax({
            url: configs.routes.sendLottory,
            type: "GET",
            dataType: "JSON",
            data: {
                'numbers':array,
                'address':account
            },
            success: function (data) {
                console.log(data)
                $('#spinner_send').hide();
                alert("Operation successful!")
                // window.location.reload(true);
            },
            error: function (err) {
                $('#spinner_send').hide();
                alert("An error ocurred while loading data ...");
            }
        });*/
    };
    const sendLottery=async function(){
        $('#spinner_send').show();
        $('#spinner_send_svg').hide()
        var account= await lottery.getAccount()
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
        const gasEstimated = await window.mxgfcontract.methods.pick4Numbers(array[0],array[1],array[2],array[3]).estimateGas({ from: account,value:4000000000000000 });
        var result = await window.mxgfcontract.methods.pick4Numbers(array[0],array[1],array[2],array[3]).send({
            from: account,
           gasLimit: gasEstimated,
            gas: gasEstimated,
            value:4000000000000000
        });
        if (result.transactionHash) {
            $.ajax({
                url: configs.routes.sendLottory,
                type: "GET",
                dataType: "JSON",
                data: {
                    'numbers':array,
                    'address':account
                },
                success: function (data) {
                    console.log(data)
                    $('#spinner_send').hide();
                    $('#spinner_send_svg').show()
                    alert("Operation successful!")
                     window.location.reload(true);
                },
                error: function (err) {
                    $('#spinner_send_svg').show()
                    $('#spinner_send').hide();
                    alert("An error ocurred while loading data ...");
                }
            });
       }

    }
    const currentBalance=async function(){
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
      var current_balance=  await window.mxgfcontract.methods.getCurrentBalance().call();
      console.log(current_balance)
      $('#current_balance').text(current_balance/1000000000000000000)
    };
    const totalAmount=async function(){
        console.log($('#user_account').text())
        const account=$('#user_account').text();
        if (account !== null){
            window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
            var total_amount=  await window.mxgfcontract.methods.totalAmountReceived(account).call();
            console.log("*********"+total_amount)
            $('#profit_royal_lottery').text(total_amount/1000000000000000000)
        }else {
            $('#profit_royal_lottery').text(0)
        }

    };
    const getPreviousNumber=async function(){
        var account= await lottery.getAccount()
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
        var current_balance=  await window.mxgfcontract.methods.getPreviousNumberPair().call();
        console.log(Object.values(current_balance))
        $('#previous_number').text("First:"+Object.values(current_balance)[0]+" Second:"+Object.values(current_balance)[1])
    };
    const findWinner=async function(){
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
        var lastwinneer=  await window.mxgfcontract.methods.getLastFiveWinners().call();
        console.log(lastwinneer)

        $.each(lastwinneer, function( index, value ) {
            $('#table_winner>tbody').append("<tr class='border-b border-white-100 last:border-none'>" +
                "<td class='p-4 text-left whitespace-nowrap sm:p-3'>"+Number(index+1)+"</td><td class='p-4 text-left whitespace-nowrap sm:p-3'>"+value[0]+"</td>" +
                "<td class='p-4 text-left whitespace-nowrap sm:p-3'>"+(value[1]/1000000000000000000)+"</td></tr>")
        });
       // $('#previous_number').text("First:"+Object.values(current_balance)[0]+" Second:"+Object.values(current_balance)[1])
    };
    return {
        init: function () {
            initialiseEtheruim();
            initialiseABI();
            $('#spinner_send').hide();
        },
        load: function () {
            initialiseEtheruim();
            currentBalance();
            getPreviousNumber();
        },
        getAccount,
        register,
        login,
        sendLottery,
        findWinner,
        totalAmount
    }
}();
jQuery(document).ready(function() {
    'use strict';
    lottery.init();
});
jQuery(window).on('load',function () {
    'use strict';
    lottery.load();
});
let array=[]
function getLottoNumber(num) {
    console.log(num)
    if (!array.includes(num) && array.length<4){
        array.push(num)
        console.log(num)
        $("#lt_"+num).removeClass("btn-primary");
        $("#lt_"+num).addClass("btn-success");
        var idtd = "line_" + num;
        $("#content_lotto").append("<a id='" + idtd + "' onclick='getLottoSelect("+num+")' class='flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue-500 text-[#FFFFFF]'>"+num+"</a>")
    }
}
function item() {
    console.log(testsss)

}
function getLottoSelect(num) {
    line = "#line_" + num;
    const index = array.indexOf(num);
    const x = array.splice(index, 1);
    $("#lt_"+num).addClass("btn-primary");
    $("#lt_"+num).removeClass("btn-success");
    $(line).remove();
}
