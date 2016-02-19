class AddFildToAcessos < ActiveRecord::Migration
  def change
    add_reference :acessos, :cliente, index: true, foreign_key: true
  end
end
