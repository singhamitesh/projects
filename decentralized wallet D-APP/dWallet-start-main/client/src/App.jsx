import React, { useState, useEffect } from "react";
import Web3 from "web3";
import Welcome from "./components/Welcome.jsx";
import Accounts from "./components/Accounts.jsx";
import SendEther from "./components/SendEther.jsx";
import "./App.css";

const App = () => {
  const [web3, setWeb3] = useState(null);
  const [account, setAccount] = useState(null); //child to parent transfer
  const saveAccountAddress = (accountAddress) => {
    setAccount(accountAddress);
  };

  useEffect(() => {
    const init = async () => {
      const provider = new Web3.providers.HttpProvider("HTTP://127.0.0.1:7545");
      const web3 = new Web3(provider);
      setWeb3(web3);
    };
    init();
  }, []);

  return (
    <div className="Flex">
      <div className="welMargin">
        <Welcome />
      </div>
      <div className="Account">
        <Accounts web3={web3} accountAddress={saveAccountAddress} />
      </div>

      <div>
        <SendEther web3={web3} account={account} />
      </div>
    </div>
  );
};
export default App;
