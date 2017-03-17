<script>
    func print(){
        window.print();
    }
</script>

<?php
include './koneksi.php';

$id = $_GET['id'];

$result = mysql_query("select * from data_prediksi where id = '" . $id . "'") or exit(mysql_error());
$data = mysql_fetch_assoc($result);
?>
<html>
    <head></head>
    <style>
        @font-face
        {font-family:Helvetica;
         panose-1:2 11 6 4 2 2 2 2 2 4;
         mso-font-charset:0;
         mso-generic-font-family:swiss;
         mso-font-pitch:variable;
         mso-font-signature:-536859905 -1073711037 9 0 511 0;}
        @font-face
        {font-family:Helvetica;
         panose-1:2 11 6 4 2 2 2 2 2 4;
         mso-font-charset:0;
         mso-generic-font-family:swiss;
         mso-font-pitch:variable;
         mso-font-signature:-536859905 -1073711037 9 0 511 0;}
        @font-face
        {font-family:Calibri;
         panose-1:2 15 5 2 2 2 4 3 2 4;
         mso-font-charset:0;
         mso-generic-font-family:swiss;
         mso-font-pitch:variable;
         mso-font-signature:-536870145 1073786111 1 0 415 0;}
        @font-face
        {font-family:Tahoma;
         panose-1:2 11 6 4 3 5 4 4 2 4;
         mso-font-charset:0;
         mso-generic-font-family:swiss;
         mso-font-pitch:variable;
         mso-font-signature:-520081665 -1073717157 41 0 66047 0;}

    </style>

    <body lang=IN style='tab-interval:36.0pt'>

        <div class=WordSection1>

            <p class=MsoNormal><![if !vml]><span style='mso-ignore:vglayout;position:
                                                 absolute;z-index:251657726;margin-left:-7px;margin-top:33px;width:668px;
                                                 height:115px'><img width=668 height=115
                       src="fixxxxxxxxxx%20Print_files/image002.jpg" alt="BMT_BMS_Hitam.jpg" v:shapes="Picture_x0020_1"></span><![endif]></p>

            <div style='mso-element:para-border-div;border:none;border-bottom:solid windowtext 1.0pt;
                 mso-border-bottom-alt:solid windowtext .75pt;padding:0cm 0cm 1.0pt 0cm'>

                <p class=MsoNormal style='border:none;mso-border-bottom-alt:solid windowtext .75pt;
                   padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><o:p>&nbsp;</o:p></p>

                <p class=MsoNormal style='tab-stops:513.75pt;border:none;mso-border-bottom-alt:
                   solid windowtext .75pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><span
                        style='mso-tab-count:1'>                                                                                                                                                                                                                                    </span></p>

                <p class=MsoNormal style='tab-stops:513.75pt;border:none;mso-border-bottom-alt:
                   solid windowtext .75pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><o:p>&nbsp;</o:p></p>

                <p class=MsoNormal style='tab-stops:513.75pt;border:none;mso-border-bottom-alt:
                   solid windowtext .75pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><o:p>&nbsp;</o:p></p>

                <p class=MsoNormal style='tab-stops:513.75pt;border:none;mso-border-bottom-alt:
                   solid windowtext .75pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><o:p>&nbsp;</o:p></p>

            </div>

            <p class=MsoNormal><b><span style='font-size:8.0pt;line-height:115%;font-family:
                                        "Helvetica","sans-serif";color:black'>Hasil Prediksi Kelayakan Kredit Nasabah<o:p></o:p></span></b></p>

            <p class=MsoNormal><span style='font-size:8.0pt;line-height:115%;font-family:
                                     "Helvetica","sans-serif";color:black'>No. Pembiayaan<span style='mso-tab-count:
                                      1'>    </span>: <?php echo $data["no_pembiayaan"] ?><o:p></o:p></span></p>

            <p class=MsoNormal><span style='font-size:8.0pt;line-height:115%;font-family:
                                     "Helvetica","sans-serif";color:black'>Nama<span style='mso-tab-count:2'>                      </span>:
<?php echo $data['nama_anggota'] ?><o:p></o:p></span></p>

            <p class=MsoNormal><span style='font-size:8.0pt;line-height:115%;font-family:
                                     "Helvetica","sans-serif";color:black'>No. Identitas<span style='mso-tab-count:
                                     1'>          </span>: <?php echo $data['no_identitas'] ?><o:p></o:p></span></p>

            <p class=MsoNormal><b><span style='font-size:8.0pt;line-height:115%;font-family:
                                        "Helvetica","sans-serif";color:black'>Rincian Data Nasabah<o:p></o:p></span></b></p>

            <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=644
                   style='width:482.7pt;margin-left:4.65pt;border-collapse:collapse;mso-yfti-tbllook:
                   1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
                <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.0pt'>
                    <td width=105 nowrap valign=bottom style='width:78.75pt;border:solid windowtext 1.0pt;
                        mso-border-alt:solid windowtext .5pt;background:yellow;padding:0cm 5.4pt 0cm 5.4pt;
                        height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><b><span style='mso-ascii-font-family:
                                   Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                   mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'>Jumlah
                                    Tanggungan<o:p></o:p></span></b></p>
                    </td>
                    <td width=94 nowrap valign=bottom style='width:70.85pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
                        solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
                        yellow;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'>
                            <b>
                                <span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                      mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'>
                                    Jumlah Pembiayaan
                                    <o:p></o:p>
                                </span>
                            </b>
                        </p>
                    </td>
                    <td width=104 nowrap valign=bottom style='width:77.95pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
                        solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
                        yellow;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><b><span style='mso-ascii-font-family:
                                   Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                   mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'>Jangka
                                    Waktu<o:p></o:p></span></b></p>
                    </td>
                    <td width=76 nowrap valign=bottom style='width:2.0cm;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
                        solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
                        yellow;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><b><span style='mso-ascii-font-family:
                                   Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                   mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'>Jaminan<o:p></o:p></span></b></p>
                    </td>
                    <td width=95 nowrap valign=bottom style='width:70.9pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
                        solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
                        yellow;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><b><span style='mso-ascii-font-family:
                                   Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                   mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'>Total
                                    Penghasilan<o:p></o:p></span></b></p>
                    </td>
                    <td width=85 nowrap valign=bottom style='width:63.8pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
                        solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
                        yellow;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><b><span style='mso-ascii-font-family:
                                   Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                   mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'>Karakter<o:p></o:p></span></b></p>
                    </td>
                    <td width=85 nowrap valign=bottom style='width:63.75pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
                        solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
                        yellow;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><b><span style='mso-ascii-font-family:
                                   Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                   mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'>Kelayakan<o:p></o:p></span></b></p>
                    </td>
                </tr>
                <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:15.0pt'>
                    <td width=105 nowrap valign=bottom style='width:78.75pt;border:solid windowtext 1.0pt;
                        border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                        solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                        0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><span style='mso-ascii-font-family:
                                Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'><?php echo $data['jumlah_tanggungan'] ?><o:p></o:p></span></p>
                    </td>
                    <td width=94 nowrap valign=bottom style='width:70.85pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                        padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><span style='mso-ascii-font-family:
                                Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'><?php echo $data['jumlah_pembiayaan'] ?><o:p></o:p></span></p>
                    </td>
                    <td width=104 nowrap valign=bottom style='width:77.95pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                        padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><span style='mso-ascii-font-family:
                                Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'><?php echo $data['jangka_waktu'] ?><o:p></o:p></span></p>
                    </td>
                    <td width=76 nowrap valign=bottom style='width:2.0cm;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                        padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'>
                            <span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                  mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'>
<?php echo $data['jaminan'] ?>
                                <o:p></o:p>
                            </span>
                        </p>
                    </td>
                    <td width=95 nowrap valign=bottom style='width:70.9pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                        padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif";
                                mso-fareast-font-family:"Times New Roman";color:black;mso-fareast-language:
                                IN'><?php echo $data['total_penghasilan'] ?><o:p></o:p></span></p>
                    </td>
                    <td width=85 nowrap valign=bottom style='width:63.8pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                        padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><span style='mso-ascii-font-family:
                                Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'><?php echo $data['karakter'] ?><o:p></o:p></span></p>
                    </td>
                    <td width=85 nowrap valign=bottom style='width:63.75pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                        padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                           text-align:center;line-height:normal'><span style='mso-ascii-font-family:
                                Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
                                mso-bidi-font-family:"Times New Roman";color:black;mso-fareast-language:IN'><?php echo $data['keputusan_c45'] ?><o:p></o:p></span></p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal><o:p>&nbsp;</o:p></p>

        <!--<p class=MsoNormal><span style='mso-fareast-language:IN;mso-no-proof:yes'><img width=661 height=41
                                                                                       src="fixxxxxxxxxx%20Print_files/image004.jpg" v:shapes="Picture_x0020_2"><![endif]></span></p>
        -->
        <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>

    <p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>
<button onclick="print()">Print</button>
</body>

</html>