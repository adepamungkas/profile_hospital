<HTML>
    <HEAD>
    <TITLE>Laporan Pendaftar - Sistem Pendaftaran</TITLE>
    <style media="screen,print">
        table.minimalistBlack {
            font-family: "Times New Roman", Times, serif;
            border: 1px solid #000000;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            }
            table.minimalistBlack td, table.minimalistBlack th {
            border: 1px solid #000000;
            padding: 5px 4px;
            }
            table.minimalistBlack tbody td {
            font-size: 12px;
            }
            table.minimalistBlack thead {
            background: #CFCFCF;
            border-bottom: 1px solid #000000;
            }
            table.minimalistBlack thead th {
            font-size: 14px;
            font-weight: bold;
            color: #000000;
            text-align: left;
            }
            table.minimalistBlack tfoot {
            font-size: 14px;
            font-weight: bold;
            color: #000000;
            border-top: 1px solid #000000;
            }
            table.minimalistBlack tfoot td {
            font-size: 14px;
        }
    </style>
    </HEAD>
    <BODY onload="window.print();"></BODY>
    <BODY>
    <TABLE WIDTH="100%">
    <TR>
      <TD ALIGN="CENTER" WIDTH="20%"><IMG SRC="http://kelasdesain.com/wp-content/uploads/2015/10/logo-pondok.jpg" WIDTH="33%"></TD>
      <TD ALIGN="CENTER" WIDTH="60%"><FONT SIZE="4">PONDOK PESANTREN <BR>
      <FONT SIZE="3"><B>LAPORAN PENDAFTAR TIDAK LULUS / DITOLAK<BR>
      <FONT SIZE="2"><I>Waylayap, Gedung Tataan, Kabupaten Pesawaran, Lampung 35366</FONT>
    </TD>
    <TD ALIGN="CENTER" WIDTH="20%"></TD>
    </TR>
    </TABLE>
    <HR SIZE="5" COLOR="BLACK">
    <table class="minimalistBlack" style="margin-top:20px;">
    <thead>
    <?php $no=1; ?>
      <tr>
        <th>NO</th>
        <th>Nama lengkap</th>
        <th>Panggilan</th>
        <th>Agama</th>
        <th>Kelamin</th>
        <th>Asal Sekolah</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; ?>
      <?php foreach($laporan as $d){ ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $d['nm_lengkap']; ?></td>
            <td><?php echo $d['nm_panggilan'] ?></td>
            <td><?php echo $d['jenis_kelamin'] ?></td>
            <td><?php echo $d['agama'] ?></td>
            <td><?php echo $d['asal_sekolah'];?></td>
        </tr>
      <?php } ?>
    </tbody>
    </table>
    </BODY>
</HTML>
