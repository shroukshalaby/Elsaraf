<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(AboutSiteTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(AdminBankTableSeeder::class);
        $this->call(AuditLogsTableSeeder::class);
        $this->call(BankTableSeeder::class);
        $this->call(BankSupportedTableSeeder::class);
        $this->call(BankTransferTableSeeder::class);
        $this->call(BillTransactionsTableSeeder::class);
        $this->call(BranchTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(BtcTradesTableSeeder::class);
        $this->call(CartTableSeeder::class);
        $this->call(ChargesTableSeeder::class);
        $this->call(ComplianceTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CountrySupportedTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(DepositTableSeeder::class);
        $this->call(DepositsTableSeeder::class);
        $this->call(DonationsTableSeeder::class);
        $this->call(ExtTransferTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(GatewaysTableSeeder::class);
        $this->call(HistoryTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(LogoTableSeeder::class);
        $this->call(MerchantsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PaymentLinkTableSeeder::class);
        $this->call(PlanTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductImageTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ReplySupportTableSeeder::class);
        $this->call(RequestTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(SellCardsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ShippingTableSeeder::class);
        $this->call(SocialLinksTableSeeder::class);
        $this->call(StorefrontTableSeeder::class);
        $this->call(StorefrontProductsTableSeeder::class);
        $this->call(SubaccountsTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(SupportTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TransfersTableSeeder::class);
        $this->call(TrendingTableSeeder::class);
        $this->call(TrendingCatTableSeeder::class);
        $this->call(UiDesignTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VirtualCardsTableSeeder::class);
        $this->call(VirtualTransactionsTableSeeder::class);
        $this->call(WHistoryTableSeeder::class);
    }
}

