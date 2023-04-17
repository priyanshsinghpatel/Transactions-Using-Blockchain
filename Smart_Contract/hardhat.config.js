require('@nomiclabs/hardhat-waffle');

module.exports={
  solidity:'0.8.0',
  networks: {
    sepolia:{
      url:"https://eth-sepolia.g.alchemy.com/v2/hBj9GaxUhzWurLDLh_vKV1wM1BuQQBFD",
      accounts:['0a5d0c383c318a779752fe859da0a6ef2510d2a67ef2025856b138300494fc5f']
    },
  },
};