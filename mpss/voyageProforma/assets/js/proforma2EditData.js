const vessel = [{
  ID: 1,
  VSLCode: 1,
  VSLName: '',
  TEUS: '',
  DWT: '',
  MaxCargoCapacity: '',
  Speed: ''
}, {
  ID: 2,
  VSLCode: 2,
  VSLName: '',
  TEUS: '',
  DWT: '',
  MaxCargoCapacity: '',
  Speed: ''
}]

const proforma = [{
  ID: 1,
  Port: 'IDJKT',
  Terminal: 'JKMSA',
  Dir: 1,
  vdEOP: 0,
  timeEOP: '08:00 *',
  dayEOP: 'tue *',
  Moves: 775,
  IdleTime: 6.00,
  PortStay: '',
  SeaTime: 84.00,
  SeaSpeed: '',
  TurnPort: false,
}, {
  ID: 2,
  Port: 'IDBPN',
  Terminal: 'IDBPN',
  Dir: '',
  vdEOP: '',
  timeEOP: '',
  dayEOP: '',
  Moves: 255,
  IdleTime: 4.00,
  PortStay: '',
  SeaTime: 4.00,
  SeaSpeed: '',
  TurnPort: true,
}, {
  ID: 3,
  Port: 'IDSRI',
  Terminal: 'IDSRI',
  Dir: '',
  vdEOP: '',
  timeEOP: '',
  dayEOP: '',
  Moves: 295,
  IdleTime: 8.00,
  PortStay: '',
  SeaTime: 19.00,
  SeaSpeed: '',
  TurnPort: false,
}, {
  ID: 4,
  Port: 'IDPTL',
  Terminal: 'IDPTL',
  Dir: '',
  vdEOP: '',
  timeEOP: '',
  dayEOP: '',
  Moves: 265,
  IdleTime: 5.00,
  PortStay: '',
  SeaTime: 124.00,
  SeaSpeed: '',
  TurnPort: false,
}, {
  ID: 5,
  Port: 'IDJKT',
  Terminal: 'IDJKT',
  Dir: '',
  vdEOP: '',
  timeEOP: '',
  dayEOP: '',
  Moves: '',
  IdleTime: '',
  PortStay: '',
  SeaTime: '',
  SeaSpeed: '',
  TurnPort: false,
},
];



const proformaDetails = [{}];

const vslCode = [{
  ID: 1,
  Name: 'LBR'
}, {
  ID: 2,
  Name: 'MKA'
},]

const port = [{
  ID: 1,
  Name: 'IDJKT'
}, {
  ID: 2,
  Name: 'IDBPN'
}, {
  ID: 3,
  Name: 'IDJKT'
}, {
  ID: 4,
  Name: 'IDSRI'
}, {
  ID: 5,
  Name: 'IDPTL'
},
]

const terminal = [{
  ID: 1,
  Name: 'JKMSA'
}, {
  ID: 2,
  Name: 'IDBPN'
}, {
  ID: 3,
  Name: 'IDJKT'
}, {
  ID: 4,
  Name: 'IDSRI'
}, {
  ID: 5,
  Name: 'IDPTL'
},
]

const dir = [{
  ID: 1,
  Name: 'N *',
}, {
  ID: 2,
  Name: 'E',
}, {
  ID: 3,
  Name: 'S',
}, {
  ID: 4,
  Name: 'W',
}];