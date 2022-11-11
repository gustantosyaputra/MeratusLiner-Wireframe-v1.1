const vessel = [{
  ID: 1,
  VSLCode: 1,
  VSLName: 'MERATUS LEMBAR',
  TEUS: 624,
  DWT: 8.800,
  MaxCargoCapacity: 7500,
  Speed: 11
}, {
  ID: 2,
  VSLCode: 2,
  VSLName: 'MERATUS KARIMATA',
  TEUS: 558,
  DWT: 8.180,
  MaxCargoCapacity: 7183,
  Speed: 10
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
  PortStay: 31.83,
  SeaTime: 84.00,
  SeaSpeed: 9.1,
  TurnPort: false,
}, {
  ID: 2,
  Port: 'IDBPN',
  Terminal: 'IDBPN',
  Dir: 3,
  vdEOP: 5,
  timeEOP: '06:00',
  dayEOP: 'sun',
  Moves: 255,
  IdleTime: 4.00,
  PortStay: 14.20,
  SeaTime: 4.00,
  SeaSpeed: 6.3,
  TurnPort: true,
}, {
  ID: 3,
  Port: 'IDSRI',
  Terminal: 'IDSRI',
  Dir: 3,
  vdEOP: 6,
  timeEOP: '03:00',
  dayEOP: 'mon',
  Moves: 295,
  IdleTime: 8.00,
  PortStay: 17.83,
  SeaTime: 19.00,
  SeaSpeed: 8.8,
  TurnPort: false,
}, {
  ID: 4,
  Port: 'IDPTL',
  Terminal: 'IDPTL',
  Dir: 3,
  vdEOP: 8,
  timeEOP: '05:00',
  dayEOP: 'wed',
  Moves: 265,
  IdleTime: 5.00,
  PortStay: 18.25,
  SeaTime: 124.00,
  SeaSpeed: 8.5,
  TurnPort: false,
}, {
  ID: 5,
  Port: 'IDJKT',
  Terminal: 'IDJKT',
  Dir: 1,
  vdEOP: 14,
  timeEOP: '07:00',
  dayEOP: 'tue',
  Moves: '',
  IdleTime: '',
  PortStay: '',
  SeaTime: '',
  SeaSpeed: '',
  TurnPort: false,
},
];



const proformaDetails = [{
  ID: 1,
  TimeZone: '7',
  BerthTime: '09:00',
  OpsProd: 30,
  Canal: 0,
  vdUnberth: 1,
  timeUnberth: '16:00',
  dayUnberth: 'wed',
  FAOP: '17:00',
  distanceMV: 2,
  timeMV: 1,
  qqMiles: 777,
  departDays: '',
  PTPDays: '',
  ProformaID: 1,
}, {
  ID: 2,
  TimeZone: '8',
  BerthTime: '07:00',
  OpsProd: 25,
  Canal: 0,
  vdUnberth: 6,
  timeUnberth: '22:00',
  dayUnberth: 'sun',
  FAOP: '23:00',
  distanceMV: 10,
  timeMV: 1,
  qqMiles: 65,
  departDays: 3.6,
  PTPDays: 3.6,
  ProformaID: 2,
}, {
  ID: 3,
  TimeZone: '8',
  BerthTime: '10:00',
  OpsProd: 30,
  Canal: 0,
  vdUnberth: 7,
  timeUnberth: '03:00',
  dayUnberth: 'tue',
  FAOP: '10:00',
  distanceMV: 30,
  timeMV: 7,
  qqMiles: 200,
  departDays: 4.7,
  PTPDays: 0.5,
  ProformaID: 3,
}, {
  ID: 4,
  TimeZone: '8',
  BerthTime: '07:00',
  OpsProd: 20,
  Canal: 0,
  vdUnberth: 9,
  timeUnberth: '02:00',
  dayUnberth: 'thu',
  FAOP: '04:00',
  distanceMV: 2,
  timeMV: 2,
  qqMiles: 1062,
  departDays: 6.6,
  PTPDays: 1.2,
  ProformaID: 4,
}, {
  ID: 5,
  TimeZone: '7',
  BerthTime: '08:00 *',
  OpsProd: '',
  Canal: '',
  vdUnberth: '',
  timeUnberth: '',
  dayUnberth: '',
  FAOP: '',
  distanceMV: 2,
  timeMV: 1,
  qqMiles: '',
  departDays: 12.6,
  PTPDays: 5.3,
  ProformaID: 5,
}];

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