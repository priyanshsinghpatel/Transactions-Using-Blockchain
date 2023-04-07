require('@nomiclabs/hardhat-waffle');

module.exports={
  solidity:'0.8.0',
  networks: {
    goerli:{
      url:"https://eth-goerli.g.alchemy.com/v2/UdtKz0Zi2DgQxN6cnobW958LRGUUEErV",
      accounts:['0a5d0c383c318a779752fe859da0a6ef2510d2a67ef2025856b138300494fc5f']
    },
  },
};