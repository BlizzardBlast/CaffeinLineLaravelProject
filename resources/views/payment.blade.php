@extends('layouts.mainlayout')

@section('title', 'Caffein Line | Pembayaran')

@section('container-content')
    <div class="formulir">
        <form name="payment">
            <table>
                <tr>
                    <td colspan="3"><h3 class="heading">Informasi Personal</h3></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="nama" id="nama" size="100" placeholder="Masukkan nama lengkap Anda..."></div></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="email" id="email" size="100" placeholder="Contoh: example@gmail.com"></div></td>
                </tr>
                <tr>
                    <td><label for="pesan">Nomor telepon</label></td>
                    <td> : </td>
                    <td style="width: 100%;"><div style="width: 100%;"><input type="tel" size="30" name="telp" id="telp" placeholder="Contoh: 081231235738"></div></td>
                </tr>
                <tr>
                    <td colspan="3"><h3 class="heading">Alamat</h3></td>
                </tr>
                <tr>
                    <td colspan="3" style="color: red;">Catatan: Kami hanya melayani pemesanan di daerah Jabodetabek saja.</td>
                </tr>
                <tr>
                    <td><label for="companyName">Nama perusahaan</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="companyName" id="companyName" size="200" placeholder="Silakan tulis alamat (opsional)"></div></td>
                </tr>
                <tr>
                    <td><label for="city">Kota / Kabupaten</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="city" id="city" size="100" placeholder="Nama Kota atau Kabupaten"></div></td>
                </tr>
                <tr>
                    <td><label for="provinsi">Provinsi</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="provinsi" id="provinsi" size="100" placeholder="Nama Provinsi"></div></td>
                </tr>
                <tr>
                    <td><label for="address">Alamat detail</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="address" id="address" size="200" placeholder="Alamat detail Anda (Contoh: Perumahan DJF, Jl. ABC Blok AB2 No. 17)"></div></td>
                </tr>
                <tr>
                    <td><label for="kodePos">Kode Pos</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="kodePos" id="kodePos" size="10" placeholder="Kode Pos"></div></td>
                </tr>
                <tr>
                    <td colspan="3"><h3 class="heading">Detail Pembayaran</h3></td>
                </tr>
                <tr>
                    <td><label for="method">Metode pembayaran</label></td>
                    <td> : </td>
                    <td>
                        <div style="width: 100%;">
                            <input type="radio" name="method" id="visa" value="visa" onclick="show()"><label for="visa">Visa</label>
                            <input type="radio" name="method" id="paypal" value="paypal" onclick="hide()"><label for="paypal">Paypal</label>
                        </div>
                    </td>
                </tr>
                <tr class="visaTrue">
                    <td><label for="cardNum">Nomor kartu</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="cardNum" id="cardNum" size="200" placeholder="1234 1234 1234"></div></td>
                </tr>
                <tr class="visaTrue">
                    <td><label for="expired">Tanggal Expired</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="expired" id="expired" size="200" pattern="[0-9]+[/]+[0-9]" placeholder="MM/YY"></div></td>
                </tr>
                <tr class="visaTrue">
                    <td><label for="cvv">CVV / CVC2</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="cvv" id="cvv" size="200" placeholder="CVC"></div></td>
                </tr>
                <tr>
                    <td colspan="3" style="color: red;">
                        <span id="errMsg" style="display: none;">Error Message</span>
                    </td>
                </tr>
                <tr>
                    <td><input type="button" value="Kirim Pesan" onclick="checkPayment()"></td>
                    <td></td>
                    <td><input type="reset" value="Reset" style="float: left;"></td>
                </tr>
            </table>
        </form>
    </div>
@endsection
