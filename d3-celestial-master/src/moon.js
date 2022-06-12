﻿/* global Trig, deg2rad */
var Moon = {
  elements: function(dat) {
    var t = (dat.jd - 2451545) / 36525,
        t2 = t * t,
        t3 = t * t2,
        t4 = t * t3,
        t5 = t * t4,
        t2e4 = t2 * 1e-4,
        t3e6 = t3 * 1e-6,
        t4e8 = t4 * 1e-8;

    // semimajor axis
    var sa = 3400.4 * Math.cos(deg2rad * (235.7004 + 890534.2230 * t - 32.601 * t2e4 
        + 3.664 * t3e6 - 1.769 * t4e8)) 
        - 635.6 * Math.cos(deg2rad * (100.7370 + 413335.3554 * t - 122.571 * t2e4 
        - 10.684 * t3e6 + 5.028 * t4e8)) 
        - 235.6 * Math.cos(deg2rad * (134.9634 + 477198.8676 * t + 89.970 * t2e4 
        + 14.348 * t3e6 - 6.797 * t4e8)) 
        + 218.1 * Math.cos(deg2rad * (238.1713 +  854535.1727 * t - 31.065 * t2e4 
        + 3.623 * t3e6  - 1.769 * t4e8)) 
        + 181.0 * Math.cos(deg2rad * (10.6638 + 1367733.0907 * t + 57.370 * t2e4 
        + 18.011 * t3e6 - 8.566 * t4e8)) 
        - 39.9 * Math.cos(deg2rad * (103.2079 + 377336.3051 * t - 121.035 * t2e4 
        - 10.724 * t3e6 + 5.028 * t4e8)) 
        - 38.4 * Math.cos(deg2rad * (233.2295 + 926533.2733 * t - 34.136 * t2e4 
        + 3.705 * t3e6 - 1.769 * t4e8)) 
        + 33.8 * Math.cos(deg2rad * (336.4374 + 1303869.5784 * t - 155.171 * t2e4 
        - 7.020 * t3e6 + 3.259 * t4e8)) 
        + 28.8 * Math.cos(deg2rad * (111.4008 + 1781068.4461 * t - 65.201 * t2e4 
        + 7.328 * t3e6 - 3.538 * t4e8)) 
        + 12.6 * Math.cos(deg2rad * (13.1347 + 1331734.0404 * t + 58.906 * t2e4 
        + 17.971 * t3e6 - 8.566 * t4e8)) 
        + 11.4 * Math.cos(deg2rad * (186.5442 + 966404.0351 * t - 68.058 * t2e4 
        - 0.567 * t3e6 + 0.232 * t4e8)) 
        - 11.1 * Math.cos(deg2rad * (222.5657 - 441199.8173 * t - 91.506 * t2e4 
        - 14.307 * t3e6 + 6.797 * t4e8)) 
        - 10.2 * Math.cos(deg2rad * (269.9268 + 954397.7353 * t + 179.941 * t2e4 
        + 28.695 * t3e6 - 13.594 * t4e8)) 
        + 9.7 * Math.cos(deg2rad * (145.6272 + 1844931.9583 * t + 147.340 * t2e4 
        + 32.359 * t3e6 - 15.363 * t4e8)) 
        + 9.6 * Math.cos(deg2rad * (240.6422 + 818536.1225 * t - 29.529 * t2e4 
        + 3.582 * t3e6 - 1.769 * t4e8)) 
        + 8.0 * Math.cos(deg2rad * (297.8502 + 445267.1115 * t - 16.300 * t2e4 
        + 1.832 * t3e6 - 0.884 * t4e8)) 
        - 6.2 * Math.cos(deg2rad * (132.4925 + 513197.9179 * t + 88.434 * t2e4 
        + 14.388 * t3e6 - 6.797 * t4e8)) 
        + 6.0 * Math.cos(deg2rad * (173.5506 + 1335801.3346 * t - 48.901 * t2e4 
        + 5.496 * t3e6 - 2.653 * t4e8)) 
        + 3.7 * Math.cos(deg2rad * (113.8717 + 1745069.3958 * t - 63.665 * t2e4 
        + 7.287 * t3e6 - 3.538 * t4e8)) 
        + 3.6 * Math.cos(deg2rad * (338.9083 + 1267870.5281 * t - 153.636 * t2e4 
        - 7.061 * t3e6 + 3.259 * t4e8)) 
        + 3.2 * Math.cos(deg2rad * (246.3642 + 2258267.3137 * t + 24.769 * t2e4 
        + 21.675 * t3e6 - 10.335 * t4e8)) 
        - 3.0 * Math.cos(deg2rad * (8.1929 + 1403732.1410 * t + 55.834 * t2e4 
        + 18.052 * t3e6 - 8.566 * t4e8)) 
        + 2.3 * Math.cos(deg2rad * (98.2661 + 449334.4057 * t - 124.107 * t2e4 
        - 10.643 * t3e6 + 5.028 * t4e8)) 
        - 2.2 * Math.cos(deg2rad * (357.5291 + 35999.0503 * t - 1.536 * t2e4 
        + 0.041 * t3e6 + 0.000 * t4e8)) 
        - 2.0 * Math.cos(deg2rad * (38.5872 + 858602.4669 * t - 138.871 * t2e4 
        - 8.852 * t3e6 + 4.144 * t4e8)) 
        - 1.8 * Math.cos(deg2rad * (105.6788 + 341337.2548 * t - 119.499 * t2e4 
        - 10.765 * t3e6 + 5.028 * t4e8)) 
        - 1.7 * Math.cos(deg2rad * (201.4740 + 826670.7108 * t - 245.142 * t2e4 
        - 21.367 * t3e6 + 10.057 * t4e8)) 
        + 1.6 * Math.cos(deg2rad * (184.1196 + 401329.0556 * t + 125.428 * t2e4 
        + 18.579 * t3e6 - 8.798 * t4e8)) 
        - 1.4 * Math.cos(deg2rad * (308.4192 - 489205.1674 * t + 158.029 * t2e4 
        + 14.915 * t3e6 - 7.029 * t4e8)) 
        + 1.3 * Math.cos(deg2rad * (325.7736 - 63863.5122 * t - 212.541 * t2e4 
        - 25.031 * t3e6 + 11.826 * t4e8));

    var sapp = - 0.55 * Math.cos(deg2rad * (238.2 + 854535.2 * t)) 
        + 0.10 * Math.cos(deg2rad * (103.2 + 377336.3 * t)) 
        + 0.10 * Math.cos(deg2rad * (233.2 + 926533.3 * t));

    var sma = 383397.6 + sa + sapp * t;

    // orbital eccentricity

    var se = 0.014217 * Math.cos(deg2rad * (100.7370 + 413335.3554 * t - 122.571 * t2e4 
        - 10.684 * t3e6 + 5.028 * t4e8)) 
        + 0.008551 * Math.cos(deg2rad * (325.7736 - 63863.5122 * t - 212.541 * t2e4 
        - 25.031 * t3e6 + 11.826 * t4e8)) 
        - 0.001383 * Math.cos(deg2rad * (134.9634 + 477198.8676 * t + 89.970 * t2e4 
        + 14.348 * t3e6 - 6.797 * t4e8)) 
        + 0.001353 * Math.cos(deg2rad * (10.6638 + 1367733.0907 * t + 57.370 * t2e4 
        + 18.011 * t3e6 - 8.566 * t4e8)) 
        - 0.001146 * Math.cos(deg2rad * (66.5106 + 349471.8432 * t - 335.112 * t2e4 
        - 35.715 * t3e6 + 16.854 * t4e8)) 
        - 0.000915 * Math.cos(deg2rad * (201.4740 + 826670.7108 * t - 245.142 * t2e4 
        - 21.367 * t3e6 + 10.057 * t4e8)) 
        + 0.000869 * Math.cos(deg2rad * (103.2079 + 377336.3051 * t - 121.035 * t2e4 
        - 10.724 * t3e6 + 5.028 * t4e8)) 
        - 0.000628 * Math.cos(deg2rad * (235.7004 + 890534.2230 * t - 32.601 * t2e4 
        + 3.664 * t3e6  - 1.769 * t4e8)) 
        - 0.000393 * Math.cos(deg2rad * (291.5472 - 127727.0245 * t - 425.082 * t2e4 
        - 50.062 * t3e6 + 23.651 * t4e8)) 
        + 0.000284 * Math.cos(deg2rad * (328.2445 - 99862.5625 * t - 211.005 * t2e4 
        - 25.072 * t3e6 + 11.826 * t4e8)) 
        - 0.000278 * Math.cos(deg2rad * (162.8868 - 31931.7561 * t - 106.271 * t2e4 
        - 12.516 * t3e6 + 5.913 * t4e8)) 
        - 0.000240 * Math.cos(deg2rad * (269.9268 + 954397.7353 * t + 179.941 * t2e4 
        + 28.695 * t3e6 - 13.594 * t4e8)) 
        + 0.000230 * Math.cos(deg2rad * (111.4008 + 1781068.4461 * t - 65.201 * t2e4 
        + 7.328 * t3e6  - 3.538 * t4e8)) 
        + 0.000229 * Math.cos(deg2rad * (167.2476 + 762807.1986 * t - 457.683 * t2e4 
        - 46.398 * t3e6 + 21.882 * t4e8)) 
        - 0.000202 * Math.cos(deg2rad * ( 83.3826 - 12006.2998 * t + 247.999 * t2e4 
        + 29.262 * t3e6 - 13.826 * t4e8)) 
        + 0.000190 * Math.cos(deg2rad * (190.8102 - 541062.3799 * t - 302.511 * t2e4 
        - 39.379 * t3e6 + 18.623 * t4e8)) 
        + 0.000177 * Math.cos(deg2rad * (357.5291 + 35999.0503 * t - 1.536 * t2e4 
        + 0.041 * t3e6 + 0.000 * t4e8)) 
        + 0.000153 * Math.cos(deg2rad * (32.2842 + 285608.3309 * t - 547.653 * t2e4 
        - 60.746 * t3e6 + 28.679 * t4e8)) 
        - 0.000137 * Math.cos(deg2rad * (44.8902 + 1431596.6029 * t + 269.911 * t2e4 
        + 43.043 * t3e6 - 20.392 * t4e8)) 
        + 0.000122 * Math.cos(deg2rad * (145.6272 + 1844931.9583 * t + 147.340 * t2e4 
        + 32.359 * t3e6 - 15.363 * t4e8)) 
        + 0.000116 * Math.cos(deg2rad * (302.2110 + 1240006.0662 * t - 367.713 * t2e4 
        - 32.051 * t3e6 + 15.085 * t4e8)) 
        - 0.000111 * Math.cos(deg2rad * (203.9449 + 790671.6605 * t - 243.606 * t2e4 
        - 21.408 * t3e6 + 10.057 * t4e8)) 
        - 0.000108 * Math.cos(deg2rad * (68.9815 + 313472.7929 * t - 333.576 * t2e4 
        - 35.756 * t3e6 + 16.854 * t4e8)) 
        + 0.000096 * Math.cos(deg2rad * (336.4374 + 1303869.5784 * t - 155.171 * t2e4 
        - 7.020 * t3e6 + 3.259 * t4e8)) 
        - 0.000090 * Math.cos(deg2rad * (98.2661 + 449334.4057 * t - 124.107 * t2e4 
        - 10.643 * t3e6 + 5.028 * t4e8)) 
        + 0.000090 * Math.cos(deg2rad * (13.1347 + 1331734.0404 * t + 58.906 * t2e4 
        + 17.971 * t3e6 - 8.566 * t4e8)) 
        + 0.000056 * Math.cos(deg2rad * (55.8468 - 1018261.2475 * t - 392.482 * t2e4 
        - 53.726 * t3e6 + 25.420 * t4e8)) 
        - 0.000056 * Math.cos(deg2rad * (238.1713 + 854535.1727 * t - 31.065 * t2e4 
        + 3.623 * t3e6 - 1.769 * t4e8)) 
        + 0.000052 * Math.cos(deg2rad * (308.4192 - 489205.1674 * t + 158.029 * t2e4 
        + 14.915 * t3e6 - 7.029 * t4e8)) 
        - 0.000050 * Math.cos(deg2rad * (133.0212 + 698943.6863 * t - 670.224 * t2e4 
        - 71.429 * t3e6 + 33.708 * t4e8)) 
        - 0.000049 * Math.cos(deg2rad * (267.9846 + 1176142.5540 * t - 580.254 * t2e4 
        - 57.082 * t3e6 + 26.911 * t4e8)) 
        - 0.000049 * Math.cos(deg2rad * (184.1196 + 401329.0556 * t + 125.428 * t2e4 
        + 18.579 * t3e6 - 8.798 * t4e8)) 
        - 0.000045 * Math.cos(deg2rad * (49.1562 - 75869.8120 * t + 35.458 * t2e4 
        + 4.231 * t3e6 - 2.001 * t4e8)) 
        + 0.000044 * Math.cos(deg2rad * (257.3208 - 191590.5367 * t - 637.623 * t2e4 
        - 75.093 * t3e6 + 35.477 * t4e8)) 
        + 0.000042 * Math.cos(deg2rad * (105.6788 + 341337.2548 * t - 119.499 * t2e4 
        - 10.765 * t3e6 + 5.028 * t4e8)) 
        + 0.000042 * Math.cos(deg2rad * (160.4159 + 4067.2942 * t - 107.806 * t2e4 
        - 12.475 * t3e6 + 5.913 * t4e8)) 
        + 0.000040 * Math.cos(deg2rad * (246.3642 + 2258267.3137 * t + 24.769 * t2e4 
        + 21.675 * t3e6 - 10.335 * t4e8)) 
        - 0.000040 * Math.cos(deg2rad * (156.5838 - 604925.8921 * t - 515.053 * t2e4 
        - 64.410 * t3e6 + 30.448 * t4e8)) 
        + 0.000036 * Math.cos(deg2rad * (169.7185 + 726808.1483 * t - 456.147 * t2e4 
        - 46.439 * t3e6 + 21.882 * t4e8)) 
        + 0.000029 * Math.cos(deg2rad * (113.8717 + 1745069.3958 * t - 63.665 * t2e4 
        + 7.287 * t3e6 - 3.538 * t4e8)) 
        - 0.000029 * Math.cos(deg2rad * (297.8502 + 445267.1115 * t - 16.300 * t2e4 
        + 1.832 * t3e6 - 0.884 * t4e8)) 
        - 0.000028 * Math.cos(deg2rad * (294.0181 - 163726.0747 * t - 423.546 * t2e4 
        - 50.103 * t3e6 + 23.651 * t4e8)) 
        + 0.000027 * Math.cos(deg2rad * (263.6238 + 381403.5993 * t - 228.841 * t2e4 
        - 23.199 * t3e6 + 10.941 * t4e8)) 
        - 0.000026 * Math.cos(deg2rad * (358.0578 + 221744.8187 * t - 760.194 * t2e4 
        - 85.777 * t3e6 + 40.505 * t4e8)) 
        - 0.000026 * Math.cos(deg2rad * (8.1929 + 1403732.1410 * t + 55.834 * t2e4 
        + 18.052 * t3e6 - 8.566 * t4e8));

    var sedp = -0.0022 * Math.cos(deg2rad * (103.2 + 377336.3 * t));

    var ecc = 0.055544 + se + 1e-3 * t * sedp;

    // sine of half the inclination

    var sg = 0.0011776 * Math.cos(deg2rad * (49.1562 - 75869.8120 * t + 35.458 * t2e4 
        + 4.231 * t3e6 - 2.001 * t4e8)) 
        - 0.0000971 * Math.cos(deg2rad * (235.7004 + 890534.2230 * t - 32.601 * t2e4 
        + 3.664 * t3e6 - 1.769 * t4e8)) 
        + 0.0000908 * Math.cos(deg2rad * (186.5442 + 966404.0351 * t - 68.058 * t2e4 
        - 0.567 * t3e6 + 0.232 * t4e8)) 
        + 0.0000623 * Math.cos(deg2rad * (83.3826 - 12006.2998 * t + 247.999 * t2e4 
        + 29.262 * t3e6 - 13.826 * t4e8)) 
        + 0.0000483 * Math.cos(deg2rad * (51.6271 - 111868.8623 * t + 36.994 * t2e4 
        + 4.190 * t3e6 - 2.001 * t4e8)) 
        + 0.0000348 * Math.cos(deg2rad * (100.7370 + 413335.3554 * t - 122.571 * t2e4 
        - 10.684 * t3e6 + 5.028 * t4e8)) 
        - 0.0000316 * Math.cos(deg2rad * (308.4192 - 489205.1674 * t + 158.029 * t2e4 
        + 14.915 * t3e6 - 7.029 * t4e8)) 
        - 0.0000253 * Math.cos(deg2rad * (46.6853 - 39870.7617 * t + 33.922 * t2e4 
        + 4.272 * t3e6 - 2.001 * t4e8)) 
        - 0.0000141 * Math.cos(deg2rad * (274.1928 - 553068.6797 * t - 54.513 * t2e4 
        - 10.116 * t3e6 + 4.797 * t4e8)) 
        + 0.0000127 * Math.cos(deg2rad * (325.7736 - 63863.5122 * t - 212.541 * t2e4 
        - 25.031 * t3e6 + 11.826 * t4e8)) 
        + 0.0000117 * Math.cos(deg2rad * (184.1196 + 401329.0556 * t + 125.428 * t2e4 
        + 18.579 * t3e6 - 8.798 * t4e8)) 
        - 0.0000078 * Math.cos(deg2rad * (98.3124 - 151739.6240 * t + 70.916 * t2e4 
        + 8.462 * t3e6 - 4.001 * t4e8)) 
        - 0.0000063 * Math.cos(deg2rad * (238.1713 + 854535.1727 * t - 31.065 * t2e4 
        + 3.623 * t3e6 - 1.769 * t4e8)) 
        + 0.0000063 * Math.cos(deg2rad * (134.9634 + 477198.8676 * t + 89.970 * t2e4 
        + 14.348 * t3e6 - 6.797 * t4e8)) 
        + 0.0000036 * Math.cos(deg2rad * (321.5076 + 1443602.9027 * t + 21.912 * t2e4 
        + 13.780 * t3e6 - 6.566 * t4e8)) 
        - 0.0000035 * Math.cos(deg2rad * (10.6638 + 1367733.0907 * t + 57.370 * t2e4 
        + 18.011 * t3e6 - 8.566 * t4e8)) 
        + 0.0000024 * Math.cos(deg2rad * (149.8932 + 337465.5434 * t - 87.113 * t2e4 
        - 6.453 * t3e6 + 3.028 * t4e8)) 
        + 0.0000024 * Math.cos(deg2rad * (170.9849 - 930404.9848 * t + 66.523 * t2e4 
        + 0.608 * t3e6 - 0.232 * t4e8));

    var sgp = - 0.0203 * Math.cos(deg2rad * (125.0 - 1934.1 * t)) 
        + 0.0034 * Math.cos(deg2rad * (220.2 - 1935.5 * t));

    var gamma = 0.0449858 + sg + 1e-3 * sgp;

    // longitude of perigee

    var sp = - 15.448 * Math.sin(deg2rad * (100.7370 + 413335.3554 * t - 122.571 * t2e4 
        - 10.684 * t3e6 + 5.028 * t4e8))
        - 9.642 * Math.sin(deg2rad * (325.7736 - 63863.5122 * t - 212.541 * t2e4 
        - 25.031 * t3e6 + 11.826 * t4e8)) 
        - 2.721 * Math.sin(deg2rad * (134.9634 + 477198.8676 * t + 89.970 * t2e4 
        + 14.348 * t3e6 - 6.797 * t4e8)) 
        + 2.607 * Math.sin(deg2rad * (66.5106 + 349471.8432 * t - 335.112 * t2e4 
        - 35.715 * t3e6 + 16.854 * t4e8)) 
        + 2.085 * Math.sin(deg2rad * (201.4740 + 826670.7108 * t - 245.142 * t2e4 
        - 21.367 * t3e6 + 10.057 * t4e8)) 
        + 1.477 * Math.sin(deg2rad * (10.6638 + 1367733.0907 * t + 57.370 * t2e4 
        + 18.011 * t3e6 - 8.566 * t4e8)) 
        + 0.968 * Math.sin(deg2rad * (291.5472 - 127727.0245 * t - 425.082 * t2e4 
        - 50.062 * t3e6 + 23.651 * t4e8)) 
        - 0.949 * Math.sin(deg2rad * (103.2079 + 377336.3051 * t - 121.035 * t2e4 
        - 10.724 * t3e6 + 5.028 * t4e8)) 
        - 0.703 * Math.sin(deg2rad * (167.2476 + 762807.1986 * t - 457.683 * t2e4 
        - 46.398 * t3e6 + 21.882 * t4e8)) 
        - 0.660 * Math.sin(deg2rad * (235.7004 + 890534.2230 * t - 32.601 * t2e4 
        + 3.664 * t3e6 - 1.769 * t4e8)) 
        - 0.577 * Math.sin(deg2rad * (190.8102 - 541062.3799 * t - 302.511 * t2e4 
        - 39.379 * t3e6 + 18.623 * t4e8)) 
        - 0.524 * Math.sin(deg2rad * (269.9268 + 954397.7353 * t + 179.941 * t2e4 
        + 28.695 * t3e6 - 13.594 * t4e8)) 
        - 0.482 * Math.sin(deg2rad * (32.2842 + 285608.3309 * t - 547.653 * t2e4 
        - 60.746 * t3e6 + 28.679 * t4e8)) 
        + 0.452 * Math.sin(deg2rad * (357.5291 + 35999.0503 * t - 1.536 * t2e4 
        + 0.041 * t3e6 + 0.000 * t4e8)) 
        - 0.381 * Math.sin(deg2rad * (302.2110 + 1240006.0662 * t - 367.713 * t2e4 
        - 32.051 * t3e6 + 15.085 * t4e8)) 
        - 0.342 * Math.sin(deg2rad * (328.2445 - 99862.5625 * t - 211.005 * t2e4 
        - 25.072 * t3e6 + 11.826 * t4e8)) 
        - 0.312 * Math.sin(deg2rad * (44.8902 + 1431596.6029 * t + 269.911 * t2e4 
        + 43.043 * t3e6 - 20.392 * t4e8)) 
        + 0.282 * Math.sin(deg2rad * (162.8868 - 31931.7561 * t - 106.271 * t2e4 
        - 12.516 * t3e6 + 5.913 * t4e8)) 
        + 0.255 * Math.sin(deg2rad * (203.9449 + 790671.6605 * t - 243.606 * t2e4 
        - 21.408 * t3e6 + 10.057 * t4e8)) 
        + 0.252 * Math.sin(deg2rad * (68.9815 + 313472.7929 * t - 333.576 * t2e4 
        - 35.756 * t3e6 + 16.854 * t4e8)) 
        - 0.211 * Math.sin(deg2rad * (83.3826 - 12006.2998 * t + 247.999 * t2e4 
        + 29.262 * t3e6 - 13.826 * t4e8)) 
        + 0.193 * Math.sin(deg2rad * (267.9846 + 1176142.5540 * t - 580.254 * t2e4 
        - 57.082 * t3e6 + 26.911 * t4e8)) 
        + 0.191 * Math.sin(deg2rad * (133.0212 + 698943.6863 * t - 670.224 * t2e4 
        - 71.429 * t3e6 + 33.708 * t4e8)) 
        - 0.184 * Math.sin(deg2rad * (55.8468 - 1018261.2475 * t - 392.482 * t2e4 
        - 53.726 * t3e6 + 25.420 * t4e8)) 
        + 0.182 * Math.sin(deg2rad * (145.6272 + 1844931.9583 * t + 147.340 * t2e4 
        + 32.359 * t3e6 - 15.363 * t4e8)) 
        - 0.158 * Math.sin(deg2rad * (257.3208 - 191590.5367 * t - 637.623 * t2e4 
        - 75.093 * t3e6 + 35.477 * t4e8)) 
        + 0.148 * Math.sin(deg2rad * (156.5838 - 604925.8921 * t - 515.053 * t2e4 
        - 64.410 * t3e6 + 30.448 * t4e8)) 
        - 0.111 * Math.sin(deg2rad * (169.7185 + 726808.1483 * t - 456.147 * t2e4 
        - 46.439 * t3e6 + 21.882 * t4e8)) 
        + 0.101 * Math.sin(deg2rad * (13.1347 + 1331734.0404 * t + 58.906 * t2e4 
        + 17.971 * t3e6 - 8.566 * t4e8)) 
        + 0.100 * Math.sin(deg2rad * (358.0578 + 221744.8187 * t - 760.194 * t2e4 
        - 85.777 * t3e6 + 40.505 * t4e8)) 
        + 0.087 * Math.sin(deg2rad * (98.2661 + 449334.4057 * t - 124.107 * t2e4 
        - 10.643 * t3e6 + 5.028 * t4e8)) 
        + 0.080 * Math.sin(deg2rad * (42.9480 + 1653341.4216 * t - 490.283 * t2e4 
        - 42.734 * t3e6 + 20.113 * t4e8)) 
        + 0.080 * Math.sin(deg2rad * (222.5657 - 441199.8173 * t - 91.506 * t2e4 
        - 14.307 * t3e6 + 6.797 * t4e8)) 
        + 0.077 * Math.sin(deg2rad * (294.0181 - 163726.0747 * t - 423.546 * t2e4 
        - 50.103 * t3e6 + 23.651 * t4e8)) 
        - 0.073 * Math.sin(deg2rad * (280.8834 - 1495460.1151 * t - 482.452 * t2e4 
        - 68.074 * t3e6 + 32.217 * t4e8)) 
        - 0.071 * Math.sin(deg2rad * (304.6819 + 1204007.0159 * t - 366.177 * t2e4 
        - 32.092 * t3e6 + 15.085 * t4e8)) 
        - 0.069 * Math.sin(deg2rad * (233.7582 + 1112279.0417 * t - 792.795 * t2e4 
        - 82.113 * t3e6 + 38.736 * t4e8)) 
        - 0.067 * Math.sin(deg2rad * (34.7551 + 249609.2807 * t - 546.117 * t2e4 
        - 60.787 * t3e6 + 28.679 * t4e8)) 
        - 0.067 * Math.sin(deg2rad * (263.6238 + 381403.5993 * t - 228.841 * t2e4 
        - 23.199 * t3e6 + 10.941 * t4e8)) 
        + 0.055 * Math.sin(deg2rad * (21.6203 - 1082124.7597 * t - 605.023 * t2e4 
        - 78.757 * t3e6 + 37.246 * t4e8)) 
        + 0.055 * Math.sin(deg2rad * (308.4192 - 489205.1674 * t + 158.029 * t2e4 
        + 14.915 * t3e6 -7.029 * t4e8)) 
        - 0.054 * Math.sin(deg2rad * (8.7216 + 1589477.9094 * t - 702.824 * t2e4 
        - 67.766 * t3e6 + 31.939 * t4e8)) 
        - 0.052 * Math.sin(deg2rad * (179.8536 + 1908795.4705 * t + 359.881 * t2e4 
        + 57.390 * t3e6 - 27.189 * t4e8)) 
        - 0.050 * Math.sin(deg2rad * (98.7948 + 635080.1741 * t - 882.765 * t2e4 
        - 96.461 * t3e6 + 45.533 * t4e8)) 
        - 0.049 * Math.sin(deg2rad * (128.6604 - 95795.2683 * t - 318.812 * t2e4 
        - 37.547 * t3e6 + 17.738 * t4e8)) 
        - 0.047 * Math.sin(deg2rad * (17.3544 + 425341.6552 * t - 370.570 * t2e4 
        - 39.946 * t3e6 + 18.854 * t4e8)) 
        - 0.044 * Math.sin(deg2rad * (160.4159 + 4067.2942 * t - 107.806 * t2e4 
        - 12.475 * t3e6 + 5.913 * t4e8)) 
        - 0.043 * Math.sin(deg2rad * (238.1713 + 854535.1727 * t - 31.065 * t2e4 
        + 3.623 * t3e6 - 1.769 * t4e8)) 
        + 0.042 * Math.sin(deg2rad * (270.4555 + 1140143.5037 * t - 578.718 * t2e4 
        - 57.123 * t3e6 + 26.911 * t4e8)) 
        - 0.042 * Math.sin(deg2rad * (132.4925 + 513197.9179 * t + 88.434 * t2e4 
        + 14.388 * t3e6 - 6.797 * t4e8)) 
        - 0.041 * Math.sin(deg2rad * (122.3573 - 668789.4043 * t - 727.594 * t2e4 
        - 89.441 * t3e6 + 42.274 * t4e8)) 
        - 0.040 * Math.sin(deg2rad * (105.6788 + 341337.2548 * t - 119.499 * t2e4 
        - 10.765 * t3e6 + 5.028 * t4e8)) 
        + 0.038 * Math.sin(deg2rad * (135.4921 + 662944.6361 * t - 668.688 * t2e4 
        - 71.470 * t3e6 + 33.708 * t4e8)) 
        - 0.037 * Math.sin(deg2rad * (242.3910 - 51857.2124 * t - 460.540 * t2e4 
        - 54.293 * t3e6 + 25.652 * t4e8)) 
        + 0.036 * Math.sin(deg2rad * (336.4374 +  1303869.5784 * t - 155.171 * t2e4 
        - 7.020 * t3e6 + 3.259 * t4e8)) 
        + 0.035 * Math.sin(deg2rad * (223.0943 - 255454.0489 * t - 850.164 * t2e4 
        - 100.124 * t3e6 + 47.302 * t4e8)) 
        - 0.034 * Math.sin(deg2rad * (193.2811 - 577061.4302 * t - 300.976 * t2e4 
        - 39.419 * t3e6 + 18.623 * t4e8)) 
        + 0.031 * Math.sin(deg2rad * (87.6023 - 918398.6850 * t - 181.476 * t2e4 
        - 28.654 * t3e6 + 13.594 * t4e8));

    var spp = 2.4 * Math.sin(deg2rad * (103.2 + 377336.3 * t));

    var lp = 83.353 + 4069.0137 * t - 103.238 * t2e4 
        - 12.492 * t3e6 + 5.263 * t4e8 + sp + 1e-3 * t * spp;

    // longitude of the ascending node

    var sr = - 1.4979 * Math.sin(deg2rad * (49.1562 - 75869.8120 * t + 35.458 * t2e4 
        + 4.231 * t3e6 - 2.001 * t4e8)) 
        - 0.1500 * Math.sin(deg2rad * (357.5291 + 35999.0503 * t - 1.536 * t2e4 
        + 0.041 * t3e6 + 0.000 * t4e8)) 
        - 0.1226 * Math.sin(deg2rad * (235.7004 + 890534.2230 * t - 32.601 * t2e4 
        + 3.664 * t3e6 - 1.769 * t4e8)) 
        + 0.1176 * Math.sin(deg2rad * (186.5442 + 966404.0351 * t - 68.058 * t2e4 
        - 0.567 * t3e6 + 0.232 * t4e8)) 
        - 0.0801 * Math.sin(deg2rad * (83.3826 - 12006.2998 * t + 247.999 * t2e4 
        + 29.262 * t3e6 - 13.826 * t4e8)) 
        - 0.0616 * Math.sin(deg2rad * (51.6271 - 111868.8623 * t + 36.994 * t2e4 
        + 4.190 * t3e6 - 2.001 * t4e8)) 
        + 0.0490 * Math.sin(deg2rad * (100.7370 + 413335.3554 * t - 122.571 * t2e4 
        - 10.684 * t3e6 + 5.028 * t4e8)) 
        + 0.0409 * Math.sin(deg2rad * (308.4192 - 489205.1674 * t + 158.029 * t2e4 
        + 14.915 * t3e6 - 7.029 * t4e8)) 
        + 0.0327 * Math.sin(deg2rad * (134.9634 + 477198.8676 * t + 89.970 * t2e4 
        + 14.348 * t3e6 - 6.797 * t4e8)) 
        + 0.0324 * Math.sin(deg2rad * (46.6853 - 39870.7617 * t + 33.922 * t2e4 
        + 4.272 * t3e6 - 2.001 * t4e8)) 
        + 0.0196 * Math.sin(deg2rad * (98.3124 - 151739.6240 * t + 70.916 * t2e4 
        + 8.462 * t3e6 - 4.001 * t4e8)) 
        + 0.0180 * Math.sin(deg2rad * (274.1928 - 553068.6797 * t - 54.513 * t2e4 
        - 10.116 * t3e6 + 4.797 * t4e8)) 
        + 0.0150 * Math.sin(deg2rad * (325.7736 - 63863.5122 * t - 212.541 * t2e4 
        - 25.031 * t3e6 + 11.826 * t4e8)) 
        - 0.0150 * Math.sin(deg2rad * (184.1196 + 401329.0556 * t + 125.428 * t2e4 
        + 18.579 * t3e6 - 8.798 * t4e8)) 
        - 0.0078 * Math.sin(deg2rad * (238.1713 + 854535.1727 * t - 31.065 * t2e4 
        + 3.623 * t3e6 - 1.769 * t4e8)) 
        - 0.0045 * Math.sin(deg2rad * (10.6638 + 1367733.0907 * t + 57.370 * t2e4 
        + 18.011 * t3e6 - 8.566 * t4e8)) 
        + 0.0044 * Math.sin(deg2rad * (321.5076 + 1443602.9027 * t + 21.912 * t2e4 
        + 13.780 * t3e6 - 6.566 * t4e8)) 
        - 0.0042 * Math.sin(deg2rad * (162.8868 - 31931.7561 * t - 106.271 * t2e4 
        - 12.516 * t3e6 + 5.913 * t4e8)) 
        - 0.0031 * Math.sin(deg2rad * (170.9849 - 930404.9848 * t + 66.523 * t2e4 
        + 0.608 * t3e6 - 0.232 * t4e8)) 
        + 0.0031 * Math.sin(deg2rad * (103.2079 + 377336.3051 * t - 121.035 * t2e4 
        - 10.724 * t3e6 + 5.028 * t4e8)) 
        + 0.0029 * Math.sin(deg2rad * (222.6120 - 1042273.8471 * t + 103.516 * t2e4 
        + 4.798 * t3e6 - 2.232 * t4e8)) 
        + 0.0028 * Math.sin(deg2rad * (184.0733 + 1002403.0853 * t - 69.594 * t2e4 
        - 0.526 * t3e6 + 0.232 * t4e8));

    var srp = 25.9 * Math.sin(deg2rad * (125.0 - 1934.1 * t)) 
        - 4.3 * Math.sin(deg2rad * (220.2 - 1935.5 * t));

    var srpp = 0.38 * Math.sin(deg2rad * (357.5 + 35999.1 * t));

    var raan = 125.0446 - 1934.13618 * t + 20.762 * t2e4 
        + 2.139 * t3e6 - 1.650 * t4e8 + sr 
        + 1e-3 * (srp + srpp * t);

    // mean longitude

    var sl = - 0.92581 * Math.sin(deg2rad * (235.7004 + 890534.2230 * t - 32.601 * t2e4 
        + 3.664 * t3e6 - 1.769 * t4e8)) 
        + 0.33262 * Math.sin(deg2rad * (100.7370 + 413335.3554 * t - 122.571 * t2e4 
        - 10.684 * t3e6 + 5.028 * t4e8)) 
        - 0.18402 * Math.sin(deg2rad * (357.5291 + 35999.0503 * t - 1.536 * t2e4 
        + 0.041 * t3e6 + 0.000 * t4e8)) 
        + 0.11007 * Math.sin(deg2rad * (134.9634 + 477198.8676 * t + 89.970 * t2e4 
        + 14.348 * t3e6 - 6.797 * t4e8)) 
        - 0.06055 * Math.sin(deg2rad * (238.1713 + 854535.1727 * t - 31.065 * t2e4 
        + 3.623 * t3e6 - 1.769 * t4e8)) 
        + 0.04741 * Math.sin(deg2rad * (325.7736 - 63863.5122 * t - 212.541 * t2e4 
        - 25.031 * t3e6 + 11.826 * t4e8)) 
        - 0.03086 * Math.sin(deg2rad * (10.6638 + 1367733.0907 * t + 57.370 * t2e4 
        + 18.011 * t3e6 - 8.566 * t4e8)) 
        + 0.02184 * Math.sin(deg2rad * (103.2079 + 377336.3051 * t - 121.035 * t2e4 
        - 10.724 * t3e6 + 5.028 * t4e8)) 
        + 0.01645 * Math.sin(deg2rad * (49.1562 - 75869.8120 * t + 35.458 * t2e4 
        + 4.231 * t3e6 - 2.001 * t4e8)) 
        + 0.01022 * Math.sin(deg2rad * (233.2295 + 926533.2733 * t - 34.136 * t2e4 
        + 3.705 * t3e6 - 1.769 * t4e8)) 
        - 0.00756 * Math.sin(deg2rad * (336.4374 + 1303869.5784 * t - 155.171 * t2e4 
        - 7.020 * t3e6 + 3.259 * t4e8)) 
        - 0.00530 * Math.sin(deg2rad * (222.5657 - 441199.8173 * t - 91.506 * t2e4 
        - 14.307 * t3e6 + 6.797 * t4e8)) 
        - 0.00496 * Math.sin(deg2rad * (162.8868 - 31931.7561 * t - 106.271 * t2e4 
        - 12.516 * t3e6 + 5.913 * t4e8)) 
        - 0.00472 * Math.sin(deg2rad * (297.8502 + 445267.1115 * t - 16.300 * t2e4 
        + 1.832 * t3e6 - 0.884 * t4e8)) 
        - 0.00271 * Math.sin(deg2rad * (240.6422 + 818536.1225 * t - 29.529 * t2e4 
        + 3.582 * t3e6 - 1.769 * t4e8)) 
        + 0.00264 * Math.sin(deg2rad * (132.4925 + 513197.9179 * t + 88.434 * t2e4 
        + 14.388 * t3e6 - 6.797 * t4e8)) 
        - 0.00254 * Math.sin(deg2rad * (186.5442 + 966404.0351 * t - 68.058 * t2e4 
        - 0.567 * t3e6 + 0.232 * t4e8)) 
        + 0.00234 * Math.sin(deg2rad * (269.9268 + 954397.7353 * t + 179.941 * t2e4 
        + 28.695 * t3e6 - 13.594 * t4e8)) 
        - 0.00220 * Math.sin(deg2rad * (13.1347 + 1331734.0404 * t + 58.906 * t2e4 
        + 17.971 * t3e6 - 8.566 * t4e8)) 
        - 0.00202 * Math.sin(deg2rad * (355.0582 + 71998.1006 * t - 3.072 * t2e4 
        + 0.082 * t3e6 + 0.000 * t4e8)) 
        + 0.00167 * Math.sin(deg2rad * (328.2445 - 99862.5625 * t - 211.005 * t2e4 
        - 25.072 * t3e6 + 11.826 * t4e8)) 
        - 0.00143 * Math.sin(deg2rad * (173.5506 + 1335801.3346 * t - 48.901 * t2e4 
        + 5.496 * t3e6 - 2.653 * t4e8)) 
        - 0.00121 * Math.sin(deg2rad * (98.2661 + 449334.4057 * t - 124.107 * t2e4 
        - 10.643 * t3e6 + 5.028 * t4e8)) 
        - 0.00116 * Math.sin(deg2rad * (145.6272 + 1844931.9583 * t + 147.340 * t2e4 
        + 32.359 * t3e6 - 15.363 * t4e8)) 
        + 0.00102 * Math.sin(deg2rad * (105.6788 + 341337.2548 * t - 119.499 * t2e4 
        - 10.765 * t3e6 + 5.028 * t4e8)) 
        - 0.00090 * Math.sin(deg2rad * (184.1196 + 401329.0556 * t + 125.428 * t2e4 
        + 18.579 * t3e6 - 8.798 * t4e8)) 
        - 0.00086 * Math.sin(deg2rad * (338.9083 + 1267870.5281 * t - 153.636 * t2e4 
        - 7.061 * t3e6 + 3.259 * t4e8)) 
        - 0.00078 * Math.sin(deg2rad * (111.4008 + 1781068.4461 * t - 65.201 * t2e4 
        + 7.328 * t3e6 - 3.538 * t4e8)) 
        + 0.00069 * Math.sin(deg2rad * (323.3027 - 27864.4619 * t - 214.077 * t2e4 
        - 24.990 * t3e6 + 11.826 * t4e8)) 
        + 0.00066 * Math.sin(deg2rad * (51.6271 - 111868.8623 * t + 36.994 * t2e4 
        + 4.190 * t3e6 - 2.001 * t4e8)) 
        + 0.00065 * Math.sin(deg2rad * (38.5872 + 858602.4669 * t - 138.871 * t2e4 
        - 8.852 * t3e6 + 4.144 * t4e8)) 
        - 0.00060 * Math.sin(deg2rad * (83.3826 - 12006.2998 * t + 247.999 * t2e4 
        + 29.262 * t3e6 - 13.826 * t4e8)) 
        + 0.00054 * Math.sin(deg2rad * (201.4740 + 826670.7108 * t - 245.142 * t2e4 
        - 21.367 * t3e6 + 10.057 * t4e8)) 
        - 0.00052 * Math.sin(deg2rad * (308.4192 - 489205.1674 * t + 158.029 * t2e4 
        + 14.915 * t3e6 - 7.029 * t4e8)) 
        + 0.00048 * Math.sin(deg2rad * (8.1929 + 1403732.1410 * t + 55.834 * t2e4 
        + 18.052 * t3e6 - 8.566 * t4e8)) 
        - 0.00041 * Math.sin(deg2rad * (46.6853 - 39870.7617 * t + 33.922 * t2e4 
        + 4.272 * t3e6 - 2.001 * t4e8)) 
        - 0.00033 * Math.sin(deg2rad * (274.1928 - 553068.6797 * t - 54.513 * t2e4 
        - 10.116 * t3e6 + 4.797 * t4e8)) 
        + 0.00030 * Math.sin(deg2rad * (160.4159 + 4067.2942 * t - 107.806 * t2e4 
        - 12.475 * t3e6 + 5.913 * t4e8));

    var slp = 3.96 * Math.sin(deg2rad * (119.7 + 131.8 * t)) 
        + 1.96 * Math.sin(deg2rad * (125.0 - 1934.1 * t));

    var slpp = 0.463 * Math.sin(deg2rad * (357.5 + 35999.1 * t)) 
        + 0.152 * Math.sin(deg2rad * (238.2 + 854535.2 * t)) 
        - 0.071 * Math.sin(deg2rad * (27.8 + 131.8 * t)) 
        - 0.055 * Math.sin(deg2rad * (103.2 + 377336.3 * t)) 
        - 0.026 * Math.sin(deg2rad * (233.2 + 926533.3 * t));

    var slppp = 14 * Math.sin(deg2rad * (357.5 + 35999.1 * t)) 
        + 5 * Math.sin(deg2rad * (238.2 + 854535.2 * t));

    var lambda = 218.31665 + 481267.88134 * t - 13.268 * t2e4 
        + 1.856 * t3e6 - 1.534 * t4e8 + sl 
        + 1e-3 * (slp + slpp * t + slppp * t2e4);

     dat.a = sma;
     dat.e = ecc;
     dat.i = 2.0 * Math.asin(gamma);
     dat.w = Trig.normalize(deg2rad * (lp - raan));
     dat.N = Trig.normalize(deg2rad * raan);
     dat.M = Trig.normalize(deg2rad * (lambda - lp));
     return dat;
  },
  corr: function(dat, sol) {
    var M = Trig.normalize(sol.M + Math.PI),
        w = Trig.normalize(sol.w + Math.PI),
        L = dat.M + dat.w,     // Argument of latitude 
        E = L + dat.N - M - w; // Mean elongation
    
    var lon = 
      -0.022234 * Math.sin(dat.M - 2*E) +  // Evection
       0.011494 * Math.sin(2*E) +          // Variation
      -0.003246 * Math.sin(M) +        // Yearly Equation
      -0.001029 * Math.sin(2*dat.M - 2*E) +
      -9.94838e-4 * Math.sin(dat.M - 2*E + M) +
       9.25025e-4 * Math.sin(dat.M + 2*E) +
       8.02851e-4 * Math.sin(2*E - M) +
       7.15585e-4 * Math.sin(dat.M - M) +
      -6.10865e-4 * Math.sin(E) + 
      -5.41052e-4 * Math.sin(dat.M + M) +
      -2.61799e-4 * Math.sin(2*L - 2*E) +
       1.91986e-4 * Math.sin(dat.M - 4*E);
    dat.ra += lon;
    var lat =
      -0.003019 * Math.sin(L - 2*E) +
      -9.59931e-4 * Math.sin(dat.M - L - 2*E) +
      -8.02851e-4 * Math.sin(dat.M + L - 2*E) +
       5.75958e-4 * Math.sin(L + 2*E) +
       2.96706e-4 * Math.sin(2*dat.M + L);  
    dat.dec += lat;
  
    dat.age = Trig.normalize(dat.l - sol.l + Math.PI);   
    dat.phase = 0.5 * (1 - Math.cos(dat.age));

    return dat;
  }

};